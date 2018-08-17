import cv2
import numpy as np
import MySQLdb

mydb = MySQLdb.connect(
  host="localhost",
  user="root",
  passwd="thurai26620",
  database="mydatabase"
)
recognizer = cv2.face.LBPHFaceRecognizer_create()
recognizer.read('trainer/trainer.yml')
cascadePath = "haarcascade_frontalface_default.xml"
faceCascade = cv2.CascadeClassifier(cascadePath);
font = cv2.FONT_ITALIC
cam = cv2.VideoCapture(0)
while True:
    ret, im =cam.read()
    gray = cv2.cvtColor(im,cv2.COLOR_BGR2GRAY)
    faces = faceCascade.detectMultiScale(gray, 1.2,5)
    for(x,y,w,h) in faces:
        cv2.rectangle(im, (x-20,y-20), (x+w+20,y+h+20), (0,255,0), 4)
        Id,conf = recognizer.predict(gray[y:y+h,x:x+w]) 
        if(Id == 1):
            Id = "chellathurai"
        elif(Id == 2):
            Id = "ajay"
        elif(Id ==3):
            Id="midul"
        elif(Id==4):
            Id="tamil"
        else:
            Id="unknoen"
        cv2.rectangle(im, (x-22,y-90), (x+w+22, y-22), (255,0,0), -1)
        cv2.putText(im, str(Id),(x,y-40), font, 2, (255,220,0), 3)
        mycursor = mydb.cursor()
        sql="UPDATE attendance SET thu=%s WHERE name=%s"
        val=('p',Id)
        mycursor.execute(sql,val)
        mydb.commit()
 
    cv2.imshow('im',im) 
    if cv2.waitKey(10) & 0xFF == ord('q'):
        break
cam.release()
cv2.destroyAllWindows()

