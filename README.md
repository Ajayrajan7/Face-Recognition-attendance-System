# Face-Recognition-attendance-System
Hello friends,We have created Face recognition attenance system using the python package called open cv which is the vision package for python which captures image and compares which is already fed to the computer,and produces the accurate result to the database which eliminates the human interfere in checking their presence.Before,there are bio-metric results but it is costly and needs high maintanence
and takes huge time.But our AI face recognition system will capture withing 2 second without the need of their attention.And the output is resulted to the database and the calculations are made easily.
  To display the results that are reflected to the face-recognition,we've created a website which gives the accurate results and more advanced in this system gonna be updated soon.
 
 File dataset.py:
  First run the dataset.py file in python IDLE,it'll create a folder in specified directory and the captures the image from the camera with the help of python open cv.And we can view the images from the specified directory.Specify unique id for each.
  
  File training.py:
    Then run the file to train the images which are present in the dataset folder.Training is must before recognizing the face because after the training the haarcascade files are created.
    
  File original.py:
     Then finally run the original.py file which compares the haarcascade files with real faces detected in the camera.Then it'll produce the accurate output to the database.Note that you have to create a database table to store the results and to fetch and don't forget to connect python to the databse using mysql.connector.
     
website is created to show the reuslts,
         First sign in using sign.html result'll be displayed for the user who have logged in.The php files uploaded are used to connect the database,store and retrive results.
        
 Requirements:
   1.Python version 2.7 and above,
   2.open cv wrapper,numpy,picture library,
   3.Mysql database connector and sql database,
   4.For websites you need  local server for executing the php files and a database to store and retrive.
   
  
