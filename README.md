
# Music Dashboard Web Application

## 1. Intro to Your Project

Our web application displays and manages our favorite music, featuring a dashboard that showcases our top artists and their albums. We have integrated CRUD functionalities for both artists and albums. Since we both love music, we decided to create a web app where we can share our favorite music and combine our favorites into one dashboard, allowing us to manage our music preferences. The artists included for Maria are DPR Ian, Ava Max, and VIXX, while Cherry's favorites are Keshi, Ariana Grande, and The 1975.

## 2. Explain the Features and Database Schema

Both artists and albums have CRUD operations. The artist table contains the fields `id`, `name`, `genre`, `active`, and `origin`. The album table includes `id`, `artist_id` (a foreign key linking to the id of the Artist table), `title`, and `release_year`. Each artist can have multiple albums, while each album can belong to one artist only (one-to-many relationship). When creating a new album, users can assign it to an existing artist from the database.

Non-authenticated users can view the dashboard, browse all artists and albums, including the albums that belong to each artist. If a user wants to log in or register, they can find the links in the nav bar. However, if a user attempts to perform actions such as editing, adding, or deleting without being logged in, they will be redirected to the login page as these functions require user authentication. Once logged in, the navigation bar will update to display a logout button and a personalized welcome message for the user.

## 3. Add 4-10 Screenshots to Demo the User Flow

1. View all artists (public view)
<img src="https://i.imgur.com/XieNOzx.png" alt="View all artists" width="500">
2. View all albums by a specific artist (public view)
<img src="https://i.imgur.com/hai92lC.png" alt="View all artists" width="500">
3. View all albums (public view)
<img src="https://i.imgur.com/4nV7FL9.png" alt="View all artists" width="500">
4. Access Edit Artist (Admin -> redirected to login)
<img src="https://i.imgur.com/fyXfZLy.png" alt="View all artists" width="500">
5. Edit Artist -> Eg. Active Since
<img src="https://i.imgur.com/6LvOtQf.png" alt="View all artists" width="500">
6. Redirect to edited artist’s page
<img src="https://i.imgur.com/ECb2SBC.png" alt="View all artists" width="500">
7. Logout (Back to public view)


## 5. If you were unable to complete the assignment, explain what you wanted to do and why you couldn't complete it - 1-2 paragraphs
Before implementing middleware for specific route protection, all routes, including artists.create, were accessible to public view without any issues. When applying middleware to the entire Artist or Albums routes, it worked fine. However, after introducing middleware to restrict access based on user authentication for specific routes (such as dividing routes into public and authenticated user access), the artists.create route began returning a 404 Not Found error, while other routes like artists.edit and artists.trash continued to function correctly. (Refer to the image below as the working site before adding specific routing protection.)
<img src="https://i.imgur.com/vxx571S.png" alt="View all artists" width="500">

The create route was properly defined within the middleware group, along with the edit and trash functionalities, all using the same code. However, create is the only route returning a 404 error. To troubleshoot, I confirmed that the create method in ArtistController correctly returns the artists.create view and that the create.blade.php file was properly placed in the resources/views/artists directory. Despite these checks, the route still resulted in a 404 error. Further investigation into route definitions and middleware application is needed to resolve the issue.

## 5. Your Thoughts on Laravel and Future Learnings

Laravel is a convenient framework for this project, especially with its ability to automatically generate routes and templates, which is particularly useful for CRUD operations. The introduction of data seeding and the use of Faker for generating random names, emails, and other data were also useful, allowing us to quickly populate our database with realistic data and saving a lot of time. In the future, it would be interesting to see how Laravel can be integrated with other front-end frameworks to further enhance the front-end user experience.



