import jieba
import MySQLdb
import requests
import time
from bs4 import BeautifulSoup
from selenium import webdriver

def remove_values_from_list(the_list, val):
    return [value for value in the_list if value != val]

jieba.set_dictionary('dict.txt.big')
jieba.load_userdict('userdict.txt')

with open('positive.txt', 'r',encoding='UTF-8') as positive:
    pos=[]
    for line in positive:
        pos.append(line.strip('\ufeff').strip())
    positive.close()

with open('negative.txt', 'r',encoding='UTF-8') as negative:
    neg=[]
    for line in negative:
        neg.append(line.strip('\ufeff').strip())
    negative.close()

with open('paid news.txt', 'r',encoding='UTF-8') as paidnews:
    paid=[]
    for line in paidnews:
        paid.append(line.strip('\ufeff').strip())
    paidnews.close()


pos_set=set(pos)
neg_set=set(neg)
paid_set=set(paid)

conn = MySQLdb.connect(host="localhost", user="root", passwd="", db="python",charset='utf8')#連結資料庫
cur = conn.cursor() 
def get ():
    cur.execute("SELECT search_href,id FROM mobile01 WHERE content_analyst='-1'")
    results = cur.fetchall()
    return results
def analyst (results):
    
    for record in results: 
        db_url = record[0]
        mobile01_id= record[1]
        print (db_url)
        
        res=requests.get(db_url)
        res.encoding='utf-8'
        soup = BeautifulSoup (res.text, "html5lib")
        main_article=soup.select('.single-post-content')
        content=main_article[0].text.strip()
        sentence=content.split("\n")
        sentence=remove_values_from_list(sentence,'')

        total_pos_count=0
        total_neg_count=0
        total_paid_count=0
        for line in sentence:

            line2=line.strip()
            words=jieba.lcut(line2, cut_all=False)
            words_set = set(words)
            pos_intersection=words_set.intersection(pos_set)
            neg_intersection=words_set.intersection(neg_set)
            paid_intersection=words_set.intersection(paid_set)
            pos_count=len(pos_intersection)
            neg_count=len(neg_intersection)
            paid_count=len(paid_intersection)

            total_pos_count=total_pos_count+pos_count
            total_neg_count=total_neg_count+neg_count
            total_paid_count=total_paid_count+paid_count
        total_count = total_pos_count+total_neg_count+total_paid_count


        if total_count==0:
            Content_Analyst = "0"

        else:
            total_pos_count=total_pos_count+1
            total_count=total_count+2
            Content_Analyst = format(total_pos_count/total_count*100 , '0.2f')
        print (mobile01_id)   
        cur.execute ("UPDATE mobile01 SET content_analyst=%s WHERE id='%s'" %  (Content_Analyst,mobile01_id))
        conn.commit()
        time.sleep(1)




result=get()
print (len(result))
while(len(result)!=0):
    analyst(result)
    result=get()
    print(len(result))
  
cur.close() #斷開連結
conn.close()
