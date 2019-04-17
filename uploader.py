import re
import requests
import json

# bottle is the module which will manage our API routes/requests
from bottle import route, run, static_file

# mysql connector allows us to connect to a mysql database
import mysql.connector

# load our config json file into a python dictionary
config = json.loads(open('config.json').read())

# establish mysql connection
db = mysql.connector.connect(
  host=config['mysqlHost'],
  user=config['mysqlUser'],
  passwd=config['mysqlPassword'],
  database=config['mysqlDatabase']
)

# the cursor is used to query the database
cursor = db.cursor() 

# Format to enter stuff into the database
qString = 'INSERT INTO wifiMAC_BD (macAdd, vendor) VALUES (%s, %s)'

print('Connection established')

# Regular Expression, only gets MAC Addresses after it sees "device"
MAC_regex = re.compile(r"(?<=\bdevice\b\s)\w\w[:]\w\w[:]\w\w[:]\w\w[:]\w\w[:]\w\w")

# Insert the textfile with the raw text of kismet into an object
testFile = open("kismetlog.txt","r")

# URL for MAC Address lookup API
MAC_URL = 'http://macvendors.co/api/%s'

# Loop through the lines of the file to find MAC Addresse
for line in testFile:
  MAC_addresses = MAC_regex.findall(line) # Compile all found mac addresses in var MAC_addresses
  for address in MAC_addresses: # Loop through the individual MAC Addresses
    req = requests.get(MAC_URL%address)
    obj = req.json()
    for key, value in obj.items():
      if('company' in value):
        values = (address,value['company'])
      else:
      	values = (address,'Null')
      cursor.execute(qString,values)

db.commit()

qString2 = "SELECT count(*) FROM wifiMAC_BD where timestampe > now() - interval '5' minute;" 
cursor.execute(qString2)
preCount = cursor.fetchall()
preCountStr = str(preCount)
countStr = preCountStr[2:-3]
count = int(countStr)
db.commit()

qString3 = "INSERT INTO historicalData_BD (numAddresses,helper)  VALUES (%s,%s)"
args = (count, '3')
print(count)
cursor.execute(qString3, args)
db.commit()


qString4 = "SELECT count(*) FROM wifiMAC_BD where (timestampe > now() - interval '5' minute) AND ( vendor = 'Apple, Inc.' OR  vendor = 'Google, Inc.' Or  vendor ='Microsoft' Or  vendor ='Samsung Electronics Co.,Ltd' OR  vendor ='HUAWEI TECHNOLOGIES CO.,LTD');" 
cursor.execute(qString4)
preCount = cursor.fetchall()
preCountStr = str(preCount)
countStr = preCountStr[2:-3]
count = int(countStr)
db.commit()

qString5 = "INSERT INTO historicalData_BD_Limited (numAddresses,helper)  VALUES (%s,%s)"
args = (count, '3')
print(count)
cursor.execute(qString5, args)
db.commit()

cursor.close()
db.close()


