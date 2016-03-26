#!/usr/bin/python
#coding="utf-8"
import urllib.request
import xml.etree.ElementTree as ET
import time
import pymysql
conn=pymysql.connect(host='',user='',passwd='',db='',port=,charset='utf8')

def genData(url):
	ttXml=urllib.request.urlopen(url).read().decode('gbk')
	root=ET.fromstring(ttXml)
	items=root[0].iter(tag='item')
	dataDict={}
	dataDict['title']=[]
	dataDict['link']=[]
	dataDict['author']=[]
	dataDict['pubDate']=[]
	dataDict['guid']=[]
	dataDict['comments']=[]
	dataDict['description']=[]
	for i in items:
		dataDict['title'].append(i[0].text)
		dataDict['link'].append(i[1].text)
		dataDict['author'].append(i[2].text)
		dataDict['pubDate'].append(i[3].text)
		dataDict['guid'].append(i[4].text)
		dataDict['comments'].append(i[5].text)
		dataDict['description'].append(i[6].text)
	return dataDict

def storeData(dataDict,table):
	now=str(int(time.time()))
	date=str(time.strftime("%Y%m%d"))
	cur=conn.cursor()
	sql='SELECT COUNT(1) FROM '+table
	cur.execute(sql)
	num=cur.fetchall()[0][0]
	for i in range(len(dataDict['title'])):
		sql='INSERT INTO '+table+"(number,time,date,title,link,author,pubDate,guid,comments,description) values(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)"
		cur.execute(sql,(num+i,now,date,str(dataDict['title'][i]),str(dataDict['link'][i]),str(dataDict['author'][i]),str(dataDict['pubDate'][i]),str(dataDict['guid'][i]),str(dataDict['comments'][i]),dataDict['description'][i]))
		conn.commit()

toptenData=genData('http://bbs.byr.cn/rss/topten')
storeData(toptenData,'topten')
recommendData=genData('http://bbs.byr.cn/rss/recommend')
storeData(recommendData,'recommend')
