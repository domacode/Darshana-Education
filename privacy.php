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
<h1 class="text-center my-5">Privacy Policy</h1>
<div class="row">
    <div class="col-sm-10 col-md-10 mx-auto">
        <div class="container-xl resources text-start">
            <p>At darshanaeducation.com, accessible from <a
                    href="https://darshanaeducation.com">https://darshanaeducation.com</a>, the privacy of our visitors is a
                top
                priority. This Privacy Policy outlines the types of information that is collected and recorded by
                darshanaeducation.com and how we use it.</p>
            <p>If you have any questions or require further information regarding our Privacy Policy, please feel free
                to contact us.</p>

            <h3>Consent</h3>
            <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

            <h3>Information We Collect</h3>
            <p>The personal information that you are asked to provide and the reasons for which you are asked to provide
                it will be clearly explained at the point we request your information.</p>
            <p>If you contact us directly, we may collect additional information such as your name, email address, phone
                number, and the contents of the message or attachments you send us. When you register for an account on
                our platform, we may request details such as your name, address, email address, and other contact
                information.</p>

            <h3>How We Use Your Information</h3>
            <p>We use the information we collect for the following purposes:</p>
            <ul>
                <li>Provide, operate, and maintain our website</li>
                <li>Improve, personalize, and expand our website</li>
                <li>Understand and analyze how you use our website</li>
                <li>Develop new features, services, and functionalities</li>
                <li>Communicate with you directly, including customer service support, updates, marketing, and
                    promotional content</li>
                <li>Send emails and notifications</li>
                <li>Detect and prevent fraud</li>
            </ul>

            <h3>Log Files</h3>
            <p>darshanaeducation.com follows a standard procedure of using log files. These files log
                visitors when they visit websites. This is part of the hosting service's analytics. The information
                collected by log files includes internet protocol (IP) addresses, browser type, Internet Service
                Provider (ISP), date and time stamps, referring/exit pages, and click patterns. This information is not
                linked to personally identifiable information and is used for analyzing trends, site administration, and
                gathering demographic data.</p>

            <h3>Cookies and Web Beacons</h3>
            <p>Like many websites, darshanaeducation.com uses cookies to store information, such as your
                preferences and the pages you visited. The information is used to optimize your experience by
                customizing our web page content based on your browser type or other information.</p>
            <p>You can manage cookie preferences in your browser settings.</p>

            <h3>Third-Party Services</h3>
            <p>darshanaeducation.com may use third-party services to enhance functionality and performance,
                such as analytics and advertising partners. These services may collect information like your IP address
                or use cookies to help them personalize their offerings to you. We do not control third-party cookies
                and encourage you to review the privacy policies of any third-party services.</p>

            <h3>GDPR Data Protection Rights</h3>
            <p>If you are a resident of the European Economic Area (EEA), you have certain data protection rights:</p>
            <ul>
                <li><strong>The right to access</strong> – You have the right to request copies of your personal data.
                </li>
                <li><strong>The right to rectification</strong> – You have the right to request correction of any
                    information you believe is inaccurate or incomplete.</li>
                <li><strong>The right to erasure</strong> – You have the right to request deletion of your personal data
                    under certain conditions.</li>
                <li><strong>The right to restrict processing</strong> – You have the right to request that we restrict
                    processing of your personal data under certain conditions.</li>
                <li><strong>The right to object to processing</strong> – You have the right to object to how we process
                    your data.</li>
                <li><strong>The right to data portability</strong> – You have the right to request that we transfer your
                    data to another organization, or directly to you, under certain conditions.</li>
            </ul>
            <p>If you would like to exercise any of these rights, please contact us. We have one month to respond to
                your request.</p>

            <h3>CCPA Privacy Rights (For California Residents)</h3>
            <p>Under the California Consumer Privacy Act (CCPA), California residents have the right to:</p>
            <ul>
                <li>Request disclosure of what personal data has been collected</li>
                <li>Request deletion of personal data</li>
                <li>Request that your personal data is not sold to third parties</li>
            </ul>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these
                rights, please contact us.</p>

            <h3>Children's Information</h3>
            <p>Protecting children while they use the internet is a priority for us. darshanaeducation.com
                does not knowingly collect personal identifiable information from children under the age of 13. If you
                believe your child has provided this type of information on our website, please contact us immediately,
                and we will take steps to remove such information promptly.</p>

            <h3>Contact Us</h3>
            <p>If you have any questions or suggestions about our Privacy Policy, please contact us at <a
                    href="mailto:info@darshanaeducation.com">info@darshanaeducation.com</a> or <a
                    href="https://wa.me/94716554433">+94 71 655 4433</a>.</p>

        </div>
    </div>
    
</section>


<?php
include_once 'includes/footer.php';
include_once 'includes/errorMessage.php';
?>

