# bottle is the module which will manage our API routes/requests
from bottle import route, run, static_file

# requests handles external API calls
import requests

# mysql connector allows us to connect to a mysql database
import mysql.connector

# allows us to utilize our config file
import json

# load our config json file into a python dictionary
config = json.loads(open('config.json').read())

# establish mysql connection
db = mysql.connector.connect(
    host=config['mysqlHost'],
    user=config['mysqlUser'],
    passwd=config['mysqlPassword'],
    database=config['mysqlDatabase']
)

print('Connection established')

# the cursor is used to query the database
cursor = db.cursor() 

qString = 'INSERT INTO wifiMAC (macAdd, timeStampe, vendor) VALUES (%s, %s, %s)'
values = ('a', 'b', 'c')
 
cursor.execute(qString, values)
db.commit()

cursor.execute("SELECT * FROM wifiMAC;")
results = cursor.fetchall()
for r in results:
    print(r)
cursor.close()
db.close()