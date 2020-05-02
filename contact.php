<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    $title = "Contact";
    include("./components/head.php"); ?>
    <style>
        #userListLink:hover {
            color: blue !important;
        }
    </style>
</head>

<body>
    <?php include("./components/header.php"); ?>
    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Contact us<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Contact Section Begin -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="./getContact.php" class="contact-form" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <input name="firstName" type="text" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <input name="lastName" type="text" placeholder="Last Name">
                            </div>
                            <div class="col-lg-12">
                                <input name="email" type="email" placeholder="E-mail">
                                <input name="subject" type="text" placeholder="Subject">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="contact-widget">
                        <div class="cw-item">
                            <h5>Contacts</h5>
                            <ul id="contactsList">
                            </ul>
                        </div>
                        <div class="show-user-list">
                            <h5><a href="./curl.php" id="userListLink">Show all users</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Contact Section End -->

    <?php include("./components/scripts.html"); ?>
    <script>
        window.onload = function() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var contacts = this.responseText.split("|");
                    var contactList = document.querySelector("ul#contactsList");
                    contacts.forEach(function(contact) {
                        if (!contact) return;
                        var item = document.createElement("li");
                        item.innerHTML = contact;
                        contactList.appendChild(item);
                    });
                }
            };
            xmlhttp.open("GET", "./getContact.php", true);
            xmlhttp.send();
        }
    </script>
</body>

</html>