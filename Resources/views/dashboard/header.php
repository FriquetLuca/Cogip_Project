<header class="left">
    <img class="profilepic" src="assets/img/pic.png" alt="profilePic">
    <p class="firstname"><?php echo $user['firstname']; ?></p>
    <p class="lastname"><?php echo $user['lastname']; ?></p>
    <div class="underline"></div>
    <div class="element__dashboard">
        <img class="icons" src="assets/img/dashboard.png" alt="dashboard">
        <a href="./dashboard"><p class="element__dashboard__title">Dashboard</p></a>
    </div>
    <div class="element__invoices">
        <img class="icons" src="assets/img/invoice.png" alt="invoices">
        <a href="./newinvoices"><p class="element__invoices__title">Invoices</p></a>
    </div>
    <div class="element__compagnies">
        <img class="icons" src="assets/img/companies.png" alt="companies">
        <a href="./newcompanies"><p class="element__companies__title">Companies</p></a>
    </div>
    <div class="element__contact">
        <img class="icons" src="assets/img/contact.png" alt="contact">
        <a href="./newcontacts"><p class="element__contact__title">Contacts</p></a>
    </div>
    
    <div class="underline"></div>
    
    <div class="userlogout">
        <!-- <img class="userlogout__profilepic" src="assets/img/pic.png" alt="profilePic"> -->
        <a href="./logout"><p class="logout">Logout</p></a>
    </div>
</header>