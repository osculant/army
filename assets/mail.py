# importing required libraries
import mysql.connector


import smtplib



  
dataBase = mysql.connector.connect(
  host="166.62.30.147",
  user="amit",
  password="wh@t@n!dea$irj!",
  database="orascan"
)

mycursor = dataBase.cursor()

sql = "SELECT * FROM send_mail WHERE status ='pending'"

mycursor.execute(sql)

myresult = mycursor.fetchall()

for x in myresult:
  print(x) 



content="Hello World"
mail=smtplib.SMTP('sg2plcpnl0195.prod.sin2.secureserver.net', 465)
mail.ehlo()
mail.starttls()
sender='orascan@osculant.in'
recipient='rastogiaman1998@gmail.com'
mail.login('orascan@osculant.in','Orascan@pass1')
content="hi test mail";
mail.sendmail(sender, recipient, content)
mail.close()
