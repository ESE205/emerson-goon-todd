
import re
import datetime
import pprint
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

qString = 'INSERT INTO wifiMAC (macAdd, vendor) VALUES (%s, %s)'

print('Connection established')

# Regular Expression, only gets MAC Addresses after it sees "device"
MAC_regex = re.compile(r"(?<=\bdevice\b\s)\w\w[:]\w\w[:]\w\w[:]\w\w[:]\w\w[:]\w\w")

# Get the file in read mode
testFile = open("tomsroom.txt","r")

# Counter for total number of MAC Addresses seen including repeats
count = 0

# Declare a dictionary for the MAC Addresses 
MACdict = dict()

# Loop through the lines of the file to find MAC Addresses and store a timestamp in the dictionary
for line in testFile:
  MAC_addresses = MAC_regex.findall(line) # Compile all found mac addresses in var MAC_addresses
  for address in MAC_addresses: # Loop through the individual MAC Addresses
    count += 1 # Increment counter
    MACdict[address] = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S") # Define each entry of dictionary with timstamp in Year-Month-Day Hrs:Mins:Secs
    #print address

# URL for MAC Address lookup API
MAC_URL = 'http://macvendors.co/api/%s'

# Loop through the addresses in the Dictionary and print the address with timestamp and vendor information 
for adrs in MACdict: 
  print(adrs + ' ' + MACdict[adrs])
  req = requests.get(MAC_URL % adrs)
  obj = req.json()
  for key, value in obj.items():
    if('company' in value):
      values = (adrs,value['company'])
      print(value['company'])
    else:
      values = (adrs,'Null')
      print('Null')
    cursor.execute(qString,values)

db.commit()

cursor.execute("SELECT * FROM wifiMAC;")
results = cursor.fetchall()
for r in results:
    print(r)
cursor.close()
db.close()

# Print total number of devices and number of MAC Addresses.
# In theory, the same device may show up twice given a long enough period, unsure
print('Total Devices: ' + str(len(MACdict)))
print('Total # of MAC Addresses: ' + str(count))
