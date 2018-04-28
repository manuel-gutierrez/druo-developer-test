/*
Wordpress Challenge
*/

// ----------
1. What is the purpose of the following code?  

Please explain who can view the results of this code
// ----------

add_action('admin_menu', 'custom_menu');

function custom_menu(){
    add_menu_page('Custom Menu', 'Custom Menu', 'manage_options', 'custom-menu-slug', 'custom_menu_page_display');
}

function custom_menu_page_display(){
    echo '<h1>Hello World</h1>';
    echo '<p>This is a custom page</p>';
}

// ----------
Your Answer Here: 


// ----------

// ----------
2. Please write a Javascript code that change the body of a Post Page.

// ----------

// Write your answer below: 




// ----------
3. What will be necessary to integrate the javascript in the theme? 
So that all the post pages "on load" change its background color. 

// ----------

// Write your answer below: 





// ----------
4. What will be necessary to integrate the javascript in the theme? 
So that all the post pages "on load" change its background color. 

// ----------


// ----------
5. What is a potential problem in the following snippet of code
   from a WordPress theme file named “footer.php”?

// ----------
        </section><!—end of body section- ->
        <footer>All rights reserved</footer>
    </body>
</html>
// ----------