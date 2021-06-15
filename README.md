# Backend Coding Challenge 

steps to work this project 
1. download the project from github.
2. copy that project in htdocs folder and open the folder location in cmd.
3. now first rename the "env.example file to.env" 
5. open cmd and run some commands...
 -Run composer install  
 -Run php artisan serve

# to run test
php artisan test  


# End Point
# Note (all end point with length) 



# A list of the most popular repositories, sorted by number of stars. 
# An option to be able to view the top 10, 50, 100 repositories should be available. 
 
http://127.0.0.1:8000/topRepo?length=10
 


# Given a date, the most popular repositories created from this date onwards should be returned.
# An option to be able to view the top 10, 50, 100 repositories should be available. 

http://127.0.0.1:8000/filterbylanguage?language=java&length=10
 


# A filter for the programming language would be a great addition to have. 
# An option to be able to view the top 10, 50, 100 repositories should be available. 

http://127.0.0.1:8000/filterbydate?date=2021-06-01&length=10


