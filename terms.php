<?php
session_start();

//IF USER  IS NOT LOGGED IN SEND HIM TO THE LOGIN PAGE
if (!isset($_SESSION['user'])) {
    $_SESSION['status'] = "User is not logged in";
    $_SESSION['status_type'] = "";    
    header('location: index.php');
    die();
}

$pageName = 'Privacy Policy';
include_once 'includes/header.php';
?>

<section>
<style>
    h3 {
        font-weight: 900;
    }
    p {
        font-family: "Archivo";
    }
</style>
<h1 class="text-center my-5 ">Business Terms</h1>
<div class="row">
    <div class="col-sm-10 col-md-10 mx-auto">

        <div class="container-xl resources text-start">

            <p>Welcome to darshanaeducation.com!</p>
            <p>These terms and conditions outline the rules and regulations for the use of Darshana Education's Website,
                located at <a href="https://darshanaeducation.com/">https://darshanaeducation.com/</a></p>
            <p>By accessing this website, we assume you accept these terms and conditions. Do not continue to use
                darshanaeducation.com if you do not agree to all of the terms and conditions stated on
                this page.</p>

            <h3>Terminology</h3>
            <p>The following terminology applies to these Terms and Conditions, Privacy Statement, and Disclaimer Notice
                and all Agreements:</p>
            <ul>
                <li>"Client", "You", and "Your" refers to you, the person accessing this website and compliant with the
                    Company's terms and conditions.</li>
                <li>"The Company", "Ourselves", "We", "Our", and "Us" refer to Darshana Education.</li>
                <li>"Party", "Parties", or "Us" refers to both the Client and ourselves.</li>
            </ul>
            <p>All terms refer to the offer, acceptance, and consideration of payment necessary to undertake the process
                of our assistance to the Client in the most appropriate manner for the express purpose of meeting the
                Client's needs, in accordance with and subject to, prevailing law.</p>

            <h3>Cookies</h3>
            <p>We employ the use of cookies. By accessing darshanaeducation.com, you agreed to use
                cookies in agreement with Darshana Education's Privacy Policy.</p>
            <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are
                used by our website to enable the functionality of certain areas to make it easier for people visiting
                our website. Some of our affiliate/advertising partners may also use cookies.</p>

            <h3>iFrames</h3>
            <p>Without prior approval and written permission, you may not create frames around our webpages that alter
                in any way the visual presentation or appearance of our Website.</p>

            <h3>Content Liability</h3>
            <p>We shall not be held responsible for any content that appears on your website. You agree to protect and
                defend us against all claims arising on your website. No link(s) should appear on any website that may
                be interpreted as libelous, obscene, or criminal, or which infringes, otherwise violates, or advocates
                the infringement or other violation of, any third-party rights.</p>

            <h3>Reservation of Rights</h3>
            <p>We reserve the right to request that you remove all links or any particular link to our website. You
                approve to immediately remove all links to our website upon request. We also reserve the right to amend
                these terms and conditions and its linking policy at any time. By continuously linking to our website,
                you agree to be bound to and follow these linking terms and conditions.</p>

            <h3>Removal of Links</h3>
            <p>If you find any link on our website that is offensive for any reason, you are free to contact and inform
                us at any moment. We will consider requests to remove links but we are not obligated to or to respond to
                you directly.</p>
            <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or
                accuracy; nor do we promise to ensure that the website remains available or that the material on the
                website is kept up to date.</p>

            <h3>Disclaimer</h3>
            <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties, and
                conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
            <ul>
                <li>limit or exclude our or your liability for death or personal injury;</li>
                <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
            </ul>
            <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a)
                are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer,
                including liabilities arising in contract, in tort, and for breach of statutory duty.</p>
            <p>As long as the website and the information and services on the website are provided free of charge, we
                will not be liable for any loss or damage of any nature.</p>
        </div>


    </div>
</div>
</section>


<?php
include_once 'includes/footer.php';
include_once 'includes/errorMessage.php';
?>

