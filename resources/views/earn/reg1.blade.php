<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- UIkit CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css" />

     <!-- Custom css -->
     <link rel="stylesheet" href="../../css/login.css">


     <!-- Comfortaa font -->
     <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

     <!-- Fontawesome -->
     <script type="text/javascript">
          (function () {
               var css = document.createElement('link');
               css.href = 'https://use.fontawesome.com/releases/v5.11.0/css/all.css';
               css.rel = 'stylesheet'; css.type = 'text/css';
               document.getElementsByTagName('head')[0].appendChild(css);
          })(); 
     </script>

     <title>Sidadiya Register</title>


</head>

<body>


     <div class="uk-flex uk-flex-center logincard uk-width-1-1@m">
          <div class="uk-card uk-card-default uk-card-body  uk-width-1-2@m uk-animation-slide-top-small">
               <div class="uk-card-title uk-text-center">Registration</div>
               <div class="uk-text-large uk-text-center uk-text-primary">2 | 1</div>
               <div class="uk-text-small uk-text-center">User Info</div>

               
               <div class="uk-child-width-expand@m" uk-grid>

                    <form action="/reg2" method="post">

                         <!-- Name -->
                         <div class="uk-child-width-1-2@m" uk-grid>

                              <!-- First name -->
                              <div>
                                   <span class="uk-label">First Name</span>
                                   <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon"> <i class="fa fa-user"></i></span>
                                        <input required class="uk-input" autocomplete="off" type="text" name="fname" placeholder="John">
                                   </div>
                              </div>

                              <!-- Last name -->
                              <div>
                                   <span class="uk-label">Last Name</span>
                                   <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon"> <i class="fa fa-user"></i></span>
                                        <input required class="uk-input" autocomplete="off" type="text" name="lname" placeholder="Doe">
                                   </div>
                              </div>
                         </div>

                         <!-- Sponsor code-->
                         <div class="uk-margin">
                              <span class="uk-label">Sponsor code</span>
                              <div class="uk-inline uk-width-1-1">
                                   <span class="uk-form-icon"> <i class="fas fa-user-tie"></i></span>
                                   <input class="uk-input" autocomplete="off" type="password" name="spcode" placeholder="XXXXXX">
                              </div>
                         </div>

                         <!-- Email-->
                         <div class="uk-margin">
                              <span class="uk-label">Email</span>
                              <div class="uk-inline uk-width-1-1">
                                   <span class="uk-form-icon"> <i class="fa fa-envelope"></i></span>
                                   <input required class="uk-input" autocomplete="off" type="email" name="email" placeholder="sample@midadiya.lk">
                              </div>
                              @if(Session::has("alredyin"))
                                    <p class="uk-text-small  uk-text-danger">Email alredy exists</p>
                                   @endif
                         </div>
                         <!-- Password-->
                         <div class="uk-margin">
                              <span class="uk-label">Password</span>
                              <div class="uk-inline uk-width-1-1">
                                   <span class="uk-form-icon"> <i class="fa fa-key"></i></span>
                                   <input required class="uk-input" autocomplete="off" type="password"  name="password" placeholder="XXXXXX">
                              </div>
                              <p class="uk-text-small  uk-text-danger">@error('password'){{$message}}@enderror</p>
                         </div>

                         <!-- Confirm Password-->
                         <div class="uk-margin">
                              <span class="uk-label">Confirm Password</span>
                              <div class="uk-inline uk-width-1-1">
                                   <span class="uk-form-icon"> <i class="fa fa-key"></i></span>
                                   <input required class="uk-input" autocomplete="off" type="password" name="confirmed" placeholder="XXXXXX">
                              </div>
                              <p class="uk-text-small  uk-text-danger">@error('confirmed'){{$message}}@enderror</p>
                         </div>

                         <div class="uk-margin uk-text-center">
                              <label><input required class="uk-checkbox uk-margin-small-right" type="checkbox">I Agreed
                                   to Sidadiya </label><a href="#terms" uk-toggle>Term & Conditions</a>
                         </div>

                         <div class="uk-align-left">
                              <a href="/" class="uk-button uk-button-default uk-text-bold backbtn"><i
                                        class="fas fa-arrow-circle-left uk-margin-small-right"></i>Login</a>
                         </div>
                         @csrf
                         <div class="uk-align-right">
                              <button href="/reg2"
                                   class="uk-button uk-button-default uk-text-bold nextbtn" type="submit">Next<i
                                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></button>
                         </div>
                    </form>

               </div>
          </div>
     </div>


     <!-- Popup Modal Section -->
     <!-- Term & Condition Popup Modal -->
     <div id="terms" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
               <div class="uk-text-large uk-text-center">Term & Condition</div>
               <div class="uk-child-width-1-1@m" uk-grid>
                    <form action="../view/reg4.html" method="POST">
                         <ul class="uk-subnav uk-subnav-pill"
                              uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                              <li><a href="#">English</a></li>
                              <li><a href="#">සිංහල</a></li>
                         </ul>
                         <ul class="uk-switcher uk-margin uk-text-center">
                              <li>
                                   <div class="uk-text-large uk-text-danger">
                                        Special Announcement!
                                   </div>
                                   <div class="uk-text-danger">
                                        Please be sure to include accurate information, as this is the only address on
                                        your account that will be awarded with special prizes on offer at the
                                        competition events held by the company. Do not enter any false information. Your
                                        account may be deactivated if you enter false information. So please include the
                                        facts here. (If the above information is contradicted in the transactions, those
                                        transactions may be canceled. So be careful to include your exact information.)
                                   </div>
                                   <div><a uk-toggle="target: #termsfull"> Read Term and
                                             Condtions</a><br>
                                        I confirm that the information given in this form is true, complete and
                                        accurate.
                                   </div>
                                   <br>
                              </li>
                              <li>
                                   <div class="uk-text-large uk-text-danger">
                                        කාරුණික නිවේදනයයි!
                                   </div>
                                   <div class="uk-text-danger">
                                        සමාගම විසින් පවත්වනු ලබන තරග ඉසව් වලදී පිරිනමනු ලබන විශේෂ ත්‍යාග ලබාදීමේ ලිපි
                                        ඔබගේ මෙම ගිණුමේ ලිපිනයට පමණක් ලැබෙන බැවින් නිවැරුදී තොරතුරු ඇතුළත් කිරීමට
                                        කාරුණික වන්න. ව්‍යාජ තොරතුරු ඇතුළත් කිරීමෙන් වලකින්න. එසේ ව්‍යාජ තොරතුරු ඇතුළත්
                                        කොට හසුවුවහෙත් ඔබේ ගිණුම අක්‍රිය විය හැක. එබැවින් මෙහි සත්‍ය තොරතුරු ඇතුළත්
                                        කිරීමට කාරුණීක වන්න. (මුදල් ගණුදෙණු වලදී ඉහත ඇතුළත් කළ තොරතුරු පරස්පර වුවහොත් එම
                                        මුදල් ගණුදෙණු අවලංගු විය හැක. එබැවින් ඔබේ නිවැරදි තොරතුරු ඇතුළත් කිරීමට
                                        සැලකිලිමත් වන්න.)
                                   </div>
                                   <div><a uk-toggle="target: #termsfull"> Read Term and
                                             condtions</a><br>
                                        ඉහත කරුණු සත්‍ය හා නිවැරදී බවට සහතික කරමී.
                                   </div>
                                   <br>

                              </li>

                         </ul>

                         <!-- Terms and conditions popup modal -->
                         <div id="termsfull" uk-modal>
                              <div class="uk-modal-dialog uk-modal-body uk-height-1-1 uk-overflow-auto">
                                   <button class="uk-modal-close-default" type="button" uk-close></button>
                                   <h2 class="uk-modal-title uk-text-center">Terms and conditions</h2>
                                   <p class="uk-text-danger">These terms and conditions ("Terms", "Agreement") are an
                                        agreement between
                                        Sidadiya (PVT) LTD ("Sidadiya (PVT) LTD", "us", "we" or "our") and you ("User",
                                        "you" or "your").<br> This Agreement sets forth the general terms and conditions
                                        of
                                        your use of the Sidadiya mobile application and any of its products or services
                                        (collectively, "Mobile Application" or "Services").</p>

                                   <h3>Accounts And Membership</h3>
                                   <p>You must be at least 13 years of age to use this Mobile Application. By using this
                                        Mobile Application and by agreeing to this Agreement you warrant and represent
                                        that you are at least 13 years of age. If you create an account in the Mobile
                                        Application, you are responsible for maintaining the security of your account
                                        and you are fully responsible for all activities that occur under the account
                                        and any other actions taken in connection with it. We may, but have no
                                        obligation to, monitor and review new accounts before you may sign in and use
                                        our Services. Providing false contact information of any kind may result in the
                                        termination of your account. You must immediately notify us of any unauthorized
                                        uses of your account or any other breaches of security. We will not be liable
                                        for any acts or omissions by you, including any damages of any kind incurred as
                                        a result of such acts or omissions. We may suspend, disable, or delete your
                                        account (or any part thereof) if we determine that you have violated any
                                        provision of this Agreement or that your conduct or content would tend to damage
                                        our reputation and goodwill. If we delete your account for the foregoing
                                        reasons, you may not re-register for our Services. We may block your email
                                        address and Internet protocol address to prevent further registration.</p>

                                   <h3>User Content</h3>
                                   <p>We do not own any data, information or material ("Content") that you submit in the
                                        Mobile Application in the course of using the Service. You shall have sole
                                        responsibility for the accuracy, quality, integrity, legality, reliability,
                                        appropriateness, and intellectual property ownership or right to use of all
                                        submitted Content. We may monitor and review Content in the Mobile Application
                                        submitted or created using our Services by you. Unless specifically permitted by
                                        you, your use of the Mobile Application does not grant us the license to use,
                                        reproduce, adapt, modify, publish or distribute the Content created by you or
                                        stored in your user account for commercial, marketing or any similar purpose.
                                        But you grant us permission to access, copy, distribute, store, transmit,
                                        reformat, display and perform the Content of your user account solely as
                                        required for the purpose of providing the Services to you. Without limiting any
                                        of those representations or warranties, we have the right, though not the
                                        obligation, to, in our own sole discretion, refuse or remove any Content that,
                                        in our reasonable opinion, violates any of our policies or is in any way harmful
                                        or objectionable.
                                   </p>
                                   <h3>Billing & Payments </h3>
                                   <p>You shall pay all fees or charges to your account in accordance with the fees,
                                        charges, and billing terms in effect at the time a fee or charge is due and
                                        payable. Where Services are offered on a free trial basis, payment may be
                                        required after the free trial period ends, and not when you enter your billing
                                        details (which may be required prior to the commencement of the free trial
                                        period). If, in our judgment, your purchase constitutes a high-risk transaction,
                                        we will require you to provide us with a copy of your valid government-issued
                                        photo identification, and possibly a copy of a recent bank statement for the
                                        credit or debit card used for the purchase. We reserve the right to change
                                        products and product pricing at any time. We also reserve the right to refuse
                                        any order you place with us. We may, in our sole discretion, limit or cancel
                                        quantities purchased per person, per household or per order. These restrictions
                                        may include orders placed by or under the same customer account, the same credit
                                        card, and/or orders that use the same billing and/or shipping address. In the
                                        event that we make a change to or cancel an order, we may attempt to notify you
                                        by contacting the e-mail and/or billing address/phone number provided at the
                                        time the order was made.
                                   </p>
                                   <h3>Accuracy of Information </h3>
                                   <p>Occasionally there may be information in the Mobile Application that contains
                                        typographical errors, inaccuracies or omissions that may relate to product
                                        descriptions, pricing, availability, promotions and offers. We reserve the right
                                        to correct any errors, inaccuracies or omissions, and to change or update
                                        information or cancel orders if any information in the Mobile Application or on
                                        any related Service is inaccurate at any time without prior notice (including
                                        after you have submitted your order). We undertake no obligation to update,
                                        amend or clarify information in the Mobile Application including, without
                                        limitation, pricing information, except as required by law. No specified update
                                        or refresh date applied in the Mobile Application should be taken to indicate
                                        that all information in the Mobile Application or on any related Service has
                                        been modified or updated.
                                   </p>
                                   <h3>Third-party Services</h3>
                                   <p>If you decide to enable, access or use third-party services, be advised that your
                                        access and use of such other services are governed solely by the terms and
                                        conditions of such other services, and we do not endorse, are not responsible or
                                        liable for, and make no representations as to any aspect of such other services,
                                        including, without limitation, their content or the manner in which they handle
                                        data (including your data) or any interaction between you and the provider of
                                        such other services. You irrevocably waive any claim against Sidadiya (PVT) LTD
                                        with respect to such other services. Sidadiya (PVT) LTD is not liable for any
                                        damage or loss caused or alleged to be caused by or in connection with your
                                        enablement, access or use of any such other services, or your reliance on the
                                        privacy practices, data security processes or other policies of such other
                                        services. You may be required to register for or log into such other services on
                                        their respective mobile applications. By enabling any other services, you are
                                        expressly permitting Sidadiya (PVT) LTD to disclose your data as necessary to
                                        facilitate the use or enablement of such other service.
                                   </p>
                                   <h3>Uptime Guarantee</h3>
                                   <p>We offer a Service uptime guarantee of 99% of available time per month. The
                                        service uptime guarantee does not apply to service interruptions caused by: (1)
                                        periodic scheduled maintenance or repairs we may undertake from time to time;
                                        (2) interruptions caused by you or your activities; (3) outages that do not
                                        affect core Service functionality; (4) causes beyond our control or that are not
                                        reasonably foreseeable; and (5) outages related to the reliability of certain
                                        programming environments.
                                   </p>
                                   <h3>Backups</h3>
                                   <p>We perform regular backups of the Content and will do our best to ensure
                                        completeness and accuracy of these backups. In the event of the hardware failure
                                        or data loss we will restore backups automatically to minimize the impact and
                                        downtime.
                                   </p>
                                   <h3>Advertisements</h3>
                                   <p>During use of the Mobile Application, you may enter into correspondence with or
                                        participate in promotions of advertisers or sponsors showing their goods or
                                        services through the Mobile Application. Any such activity, and any terms,
                                        conditions, warranties or representations associated with such activity, is
                                        solely between you and the applicable third-party. We shall have no liability,
                                        obligation or responsibility for any such correspondence, purchase or promotion
                                        between you and any such third-party.
                                   </p>
                                   <h3>Links to Other Mobile Applications</h3>
                                   <p>Although this Mobile Application may link to other mobile applications, we are
                                        not, directly or indirectly, implying any approval, association, sponsorship,
                                        endorsement, or affiliation with any linked mobile application, unless
                                        specifically stated herein. Some of the links in the Mobile Application may be
                                        "affiliate links". This means if you click on the link and purchase an item,
                                        Sidadiya (PVT) LTD will receive an affiliate commission. We are not responsible
                                        for examining or evaluating, and we do not warrant the offerings of, any
                                        businesses or individuals or the content of their mobile applications. We do not
                                        assume any responsibility or liability for the actions, products, services, and
                                        content of any other third-parties. You should carefully review the legal
                                        statements and other conditions of use of any mobile application which you
                                        access through a link from this Mobile Application. Your linking to any other
                                        off-site mobile applications is at your own risk.
                                   </p>
                                   <h3>Prohibited Uses</h3>
                                   <p>In addition to other terms as set forth in the Agreement, you are prohibited from
                                        using the Mobile Application or its Content: (a) for any unlawful purpose; (b)
                                        to solicit others to perform or participate in any unlawful acts; (c) to violate
                                        any international, federal, provincial or state regulations, rules, laws, or
                                        local ordinances; (d) to infringe upon or violate our intellectual property
                                        rights or the intellectual property rights of others; (e) to harass, abuse,
                                        insult, harm, defame, slander, disparage, intimidate, or discriminate based on
                                        gender, sexual orientation, religion, ethnicity, race, age, national origin, or
                                        disability; (f) to submit false or misleading information; (g) to upload or
                                        transmit viruses or any other type of malicious code that will or may be used in
                                        any way that will affect the functionality or operation of the Service or of any
                                        related mobile application, other mobile applications, or the Internet; (h) to
                                        collect or track the personal information of others; (i) to spam, phish, pharm,
                                        pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or
                                        (k) to interfere with or circumvent the security features of the Service or any
                                        related mobile application, other mobile applications, or the Internet. We
                                        reserve the right to terminate your use of the Service or any related mobile
                                        application for violating any of the prohibited uses.
                                   </p>
                                   <h3>Intellectual Property Rights</h3>
                                   <p>This Agreement does not transfer to you any intellectual property owned by
                                        Sidadiya (PVT) LTD or third-parties, and all rights, titles, and interests in
                                        and to such property will remain (as between the parties) solely with Sidadiya
                                        (PVT) LTD. All trademarks, service marks, graphics and logos used in connection
                                        with our Mobile Application or Services, are trademarks or registered trademarks
                                        of Sidadiya (PVT) LTD or Sidadiya (PVT) LTD licensors. Other trademarks, service
                                        marks, graphics and logos used in connection with our Mobile Application or
                                        Services may be the trademarks of other third-parties. Your use of our Mobile
                                        Application and Services grants you no right or license to reproduce or
                                        otherwise use any Sidadiya (PVT) LTD or third-party trademarks.
                                   </p>
                                   <h3>Disclaimer of Warranty</h3>
                                   <p>You agree that your use of our Mobile Application or Services is solely at your
                                        own risk. You agree that such Service is provided on an "as is" and "as
                                        available" basis. We expressly disclaim all warranties of any kind, whether
                                        express or implied, including but not limited to the implied warranties of
                                        merchantability, fitness for a particular purpose and non-infringement. We make
                                        no warranty that the Services will meet your requirements, or that the Service
                                        will be uninterrupted, timely, secure, or error-free; nor do we make any
                                        warranty as to the results that may be obtained from the use of the Service or
                                        as to the accuracy or reliability of any information obtained through the
                                        Service or that defects in the Service will be corrected. You understand and
                                        agree that any material and/or data downloaded or otherwise obtained through the
                                        use of Service is done at your own discretion and risk and that you will be
                                        solely responsible for any damage to your computer system or loss of data that
                                        results from the download of such material and/or data. We make no warranty
                                        regarding any goods or services purchased or obtained through the Service or any
                                        transactions entered into through the Service. No advice or information, whether
                                        oral or written, obtained by you from us or through the Service shall create any
                                        warranty not expressly made herein.
                                   </p>
                                   <h3>Limitation of Liability</h3>
                                   <p>To the fullest extent permitted by applicable law, in no event will Sidadiya (PVT)
                                        LTD, its affiliates, officers, directors, employees, agents, suppliers or
                                        licensors be liable to any person for (a): any indirect, incidental, special,
                                        punitive, cover or consequential damages (including, without limitation, damages
                                        for lost profits, revenue, sales, goodwill, use of content, impact on business,
                                        business interruption, loss of anticipated savings, loss of business
                                        opportunity) however caused, under any theory of liability, including, without
                                        limitation, contract, tort, warranty, breach of statutory duty, negligence or
                                        otherwise, even if Sidadiya (PVT) LTD has been advised as to the possibility of
                                        such damages or could have foreseen such damages. To the maximum extent
                                        permitted by applicable law, the aggregate liability of Sidadiya (PVT) LTD and
                                        its affiliates, officers, employees, agents, suppliers and licensors, relating
                                        to the services will be limited to an amount greater of one dollar or any
                                        amounts actually paid in cash by you to Sidadiya (PVT) LTD for the prior one
                                        month period prior to the first event or occurrence giving rise to such
                                        liability. The limitations and exclusions also apply if this remedy does not
                                        fully compensate you for any losses or fails of its essential purpose.
                                   </p>
                                   <h3>Indemnification</h3>
                                   <p>You agree to indemnify and hold Sidadiya (PVT) LTD and its affiliates, directors,
                                        officers, employees, and agents harmless from and against any liabilities,
                                        losses, damages or costs, including reasonable attorneys' fees, incurred in
                                        connection with or arising from any third-party allegations, claims, actions,
                                        disputes, or demands asserted against any of them as a result of or relating to
                                        your Content, your use of the Mobile Application or Services or any willful
                                        misconduct on your part.
                                   </p>
                                   <h3>Severability</h3>
                                   <p>All rights and restrictions contained in this Agreement may be exercised and shall
                                        be applicable and binding only to the extent that they do not violate any
                                        applicable laws and are intended to be limited to the extent necessary so that
                                        they will not render this Agreement illegal, invalid or unenforceable. If any
                                        provision or portion of any provision of this Agreement shall be held to be
                                        illegal, invalid or unenforceable by a court of competent jurisdiction, it is
                                        the intention of the parties that the remaining provisions or portions thereof
                                        shall constitute their agreement with respect to the subject matter hereof, and
                                        all such remaining provisions or portions thereof shall remain in full force and
                                        effect.
                                   </p>
                                   <h3>Dispute Resolution</h3>
                                   <p>The formation, interpretation, and performance of this Agreement and any disputes
                                        arising out of it shall be governed by the substantive and procedural laws of
                                        Gampaha, Sri Lanka without regard to its rules on conflicts or choice of law
                                        and, to the extent applicable, the laws of Sri Lanka. The exclusive jurisdiction
                                        and venue for actions related to the subject matter hereof shall be the state
                                        and federal courts located in Gampaha, Sri Lanka, and you hereby submit to the
                                        personal jurisdiction of such courts. You hereby waive any right to a jury trial
                                        in any proceeding arising out of or related to this Agreement. The United
                                        Nations Convention on Contracts for the International Sale of Goods does not
                                        apply to this Agreement.
                                   </p>
                                   <h3>Assignment</h3>
                                   <p>You may not assign, resell, sub-license or otherwise transfer or delegate any of
                                        your rights or obligations hereunder, in whole or in part, without our prior
                                        written consent, which consent shall be at our own sole discretion and without
                                        obligation; any such assignment or transfer shall be null and void. We are free
                                        to assign any of its rights or obligations hereunder, in whole or in part, to
                                        any third-party as part of the sale of all or substantially all of its assets or
                                        stock or as part of a merger.
                                   </p>
                                   <h3>Changes and Amendments</h3>
                                   <p>We reserve the right to modify this Agreement or its policies relating to the
                                        Mobile Application or Services at any time, effective upon posting of an updated
                                        version of this Agreement in the Mobile Application. When we do, we will revise
                                        the updated date at the bottom of this page. Continued use of the Mobile
                                        Application after any such changes shall constitute your consent to such
                                        changes.
                                   </p>
                                   <h3>Acceptance of these terms</h3>
                                   <p>You acknowledge that you have read this Agreement and agree to all its terms and
                                        conditions. By using the Mobile Application or its Services you agree to be
                                        bound by this Agreement. If you do not agree to abide by the terms of this
                                        Agreement, you are not authorized to use or access the Mobile Application and
                                        its Services.
                                   </p>
                                   <h3>Contacting Us</h3>
                                   <p>If you have any questions about this Agreement, please contact us.</p>

                                   <p>This document was last updated on July 5, 2019</p>

                                   <p class="uk-text-right">
                                        <button class="uk-button uk-button-default uk-modal-close"
                                             type="button">Cancel</button>
                                   </p>
                              </div>
                         </div>


               </div>




               <p class="uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Ok</button>
               </p>
          </div>
     </div>



     <!-- jQuery -->
     <script src=" https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
          </script>

     <!-- UIkit JS -->
     <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>

     <!-- Custom js -->
     <script src="../../js/script.js"></script>


</body>

</html>