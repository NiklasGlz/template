<?php
defined( '_JEXEC' ) or die;
JLoader::import('joomla.filesystem.file');

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <jdoc:include type="head" />
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css"
        rel="stylesheet">
        <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/css/boostrap-classextentions.css"
    rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/css/masterTemplate.css"
    rel="stylesheet">

</head>
<body>
   <!--Mobile Menu-->
<div class="fixed-top d-block  d-lg-none">
    
    <button class=" dropdown-menu-mobile">
        <img  class="p-3 p-lg-0 h-100" src="https://www.pfpartners.de/images/private-finance-partners-logo-removebg-preview.png"/>
    
        <div class="toggle-icon" id="change-icon">
    
            <svg class="menu-icon" id="burger-menu" width="38" height="25" viewBox="0 0 38 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="38" height="3" rx="1.5" fill="white"/>
                <rect y="11" width="38" height="3" rx="1.5" fill="white"/>
                <rect y="22" width="38" height="3" rx="1.5" fill="white"/>
            </svg>
    
            <svg class="menu-icon" id="cross-icon" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2.61621" y="0.995605" width="38" height="3" rx="1.5" transform="rotate(45 2.61621 0.995605)" fill="white"/>
                <rect x="1" y="26.8701" width="38" height="3" rx="1.5" transform="rotate(-45 1 26.8701)" fill="white"/>
            </svg>
    
       </div>
              
    </button>
    
    <div class="dropdown-content">
        <div class="menu-items menu-layout">
            <a id="home_page" class="menu-link bold top-border" href="https://www.pfpartners.de">Home</a>
            <a id="unsere-beratung" class="menu-link" href="https://www.pfpartners.de/unsere-beratung">Unsere Beratung</a>
            <div class="dropdown-lebensphase menu-items toggle-icon-lebensphase">
            <a id="lebensphase toggle-icon-lebensphase" id="change-icon-lebensphase"class="menu-link" href="JavaScript:void(0);">Ihre Lebensphase</a>
                <div class="toggle-icon-lebensphase dropdown" >
                    <div class="menu-arrow-icon">
                    </div>
         
                </div>
            </div>
            <div class=" dropdown-content dropdown-content-lebensphase">
                    <div class=" menu-items menu-layout" style="padding-top:0px;">
                        <a id=" berufsstart" class=" menu-link" href="https://www.pfpartners.de/lebensphase/berufsstart">Berufsstart</a>
                        <a id="ausland" class=" menu-link" href="https://www.pfpartners.de/lebensphase/ausland">Im Ausland</a>
                        <a id="gruendung" class=" menu-link" href="https://www.pfpartners.de/lebensphase/gruendung">In Gründung</a>
                        <a id="kinder-familie" class=" menu-link" href="https://www.pfpartners.de/lebensphase/kinder-familie">Kinder & Familie</a>
                        <a id="immobilien" class=" menu-link" href="https://www.pfpartners.de/lebensphase/immobilien">Hausbau und Immobilien-Erwerb</a>
                        <a id="erfolgskurs" class="menu-link" href="https://www.pfpartners.de/lebensphase/erfolgskurs">Erfolgskurs</a>
                        <a id="vor-rente" class=" menu-link" href="https://www.pfpartners.de/lebensphase/vor-rente">Vor der Rente</a>
                        <a id="in-rente" class="menu-link" href="https://www.pfpartners.de/lebensphase/in-rente">In Rente</a>
                    </div>
            </div>
    
            <a id="ueber-uns" class="menu-link" href="https://www.pfpartners.de/ueber-uns">Über Uns</a>
            <!-- karriere -->
            <div class="dropdown-karriere menu-items toggle-icon-karriere menu-link">
                <a id="karriere " id="change-icon-karriere"class="menu-link" href="JavaScript:void(0);">Karriere</a>
                    <div class=" dropdown d-flex align-items-center" >
                        <div class="menu-arrow-icon">
                             
                        </div>
             
                    </div>
                </div>
                <div class="dropdown-content dropdown-content-karriere " style="background:none;">
                        <div class="menu-items menu-layout" style="padding-top:0px;">
                            <a id="" class="menu-link-dropdown bold menu-link" href="https://www.pfpartners.de/Karriere">Karriere</a>
                            <a id="" class="menu-link" href="https://www.pfpartners.de/karriere/Berufserfahrene">Berufserfahrene</a>
                            <a id="" class="menu-link" href="https://www.pfpartners.de/karriere/Berufseinsteigende">Berufseinsteigende</a>
                            <a id="" class="menu-link" href="https://www.pfpartners.de/karriere/Studierende">Studierende</a>
                            <a id="" class="menu-link" href="https://www.pfpartners.de/karriere/weitere-informationen">Weitere Informationen</a>
                        </div>
                </div>
        </div>
    
    
    
        <div class="menu-layout"> 
            <a class="menu-btns " href="https://www.pfpartners.de/kontakt"> Kontakt zu uns</a>
        </div>
    </div>
    </div>
    
    <!-- ende Mobile Menu-->
        
    
    
        <!--Menu-->
        <nav class="p-0 navbar navbar-expand-lg navbar-light nav-border fixed-top  d-none d-lg-flex">
            <div class="menu-background" id="menu-background"></div>
            <div class="container">
                <div class="col-10 d-flex align-items-center">
      <a class="navbar-brand" href="https://www.pfpartners.de/"><div class="pfp-logo"></div></a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
     <div class="collapse navbar-collapse " id="navbarNavDropdown"> -->
        <ul class="navbar-nav nav-height d-lg-flex align-items-lg-center">
          <li class="nav-item active">
            <a class="px-3 text-decoration-none bold hover-text" href="https://www.pfpartners.de/"> Home 
                <!-- <span class="sr-only">(current)</span> -->
            </a>
          </li>
          <li class="nav-item">
            <a class="px-3 text-decoration-none bold hover-text" href="https://www.pfpartners.de/unsere-beratung">Unsere Beratung</a>
          </li>
          <li class="h-100 nav-item dropdown d-flex align-items-center">
            <a class="px-3 dropdown-toggle text-decoration-none bold" href="https://www.pfpartners.de/lebensphase" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-bottom:1px;">
              Ihre Lebensphase  
            </a>
            <div class=" dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/lebensphase/berufsstart">Berufsstart</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/lebensphase/ausland">Im Ausland</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/lebensphase/gruendung">In Gründung</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/lebensphase/kinder-familie">Kinder & Familie</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/lebensphase/immobilien">Hausbau und Immobilien-Erwerb</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/lebensphase/erfolgskurs">auf Erfolgskurs</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/lebensphase/vor-rente">Vor der Rente</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/lebensphase/in-rente">In Rente</a>
              
            </div>
          </li>
    
          <li class="nav-item">
            <a class="px-3 text-decoration-none hover-text bold  d-flex align-items-center" href="https://www.pfpartners.de/ueber-uns">Über Uns</a>
          </li>
          <li class="h-100 nav-item dropdown d-flex align-items-center">
            <a class="px-3 bold dropdown-toggle text-decoration-none" href="https://www.pfpartners.de/karriere" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-bottom:1px;">
              Karriere  
            </a>
            <div class=" dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/karriere/studierende">Studierende</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/karriere/berufseinsteigende">Berufseinsteigende</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/karriere/berufserfahrene">Berufserfahrene</a>
              <a class="px-3 py-4 dropdown-item-1 text-decoration-none" href="https://www.pfpartners.de/karriere/weitere-informationen">Weitere Informationen</a>
            </div>
          </li>
          <li class="nav-item d-flex d-lg-none">
            <a class="primary-button d-flex justify-content-center align-items-center text-white text-decoration-none" href="https://join.com/companies/pfpartners">
                Kontakt zu uns
            </a>
          </li>
          
        </ul>
    <!-- </div> -->
    </div>
    <div class="col-2 d-none d-lg-flex">
        <a class="primary-button text-white d-flex justify-content-center align-items-center text-decoration-none" href="https://join.com/companies/pfpartners">
            Kontakt zu uns
        </a>
    </div>
    </div>
    </nav>
<jdoc:include type="modules" name="navbar" style="xhtml" />
<jdoc:include type="modules" name="content" style="xhtml" />
<jdoc:include type="modules" name="footer" style="xhtml" />
</body>
<footer>

              <!-- footer -->
 <div class="footer-background footer">
    <!-- footer menu -->
    <div class="pt-4 container">
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <img  class="p-3 p-lg-0 w-100" src="https://www.pfpartners.de/images/private-finance-partners-logo-removebg-preview.png"/>
            <p class="pb-4 text-center text-white"> Mit Wissen mehr Vermögen</p>
            <h4 class="p-1 h4 gradient-text text-center text-lg-start">
                Ihre Karriere ist das Ergebnis perfekter Vorbereitung. Ihr Finanzerfolg auch.
            </h4>
            <div class="my-2 col-10 d-flex justify-content-center align-items-center">
                
            <!-- <a class="w-100 primary-button d-flex justify-content-center align-items-center"><p class="text-white m-0">Zur Finanzakademie</p></a> -->
            </div>
            <div class="p-1 my-2 col-12 d-flex justify-content-center align-items-center d-none d-lg-flex">
            <a class="w-75 w-lg-100 primary-button p-2 px-4 d-flex justify-content-center align-items-center text-decoration-none" href="https://www.pfpartners.de/karriere"><p class="text-white m-0">Karriere</p></a>
            </div>
        </div>
        <div class="pb-6 pb-lg-0 col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center text-center text-lg-start" >
                    <div class="col-6 align-items-center">
                        <p class="m-0 pt-4 pb-4 pb-lg-6   gradient-text">Sitemap</p>
                        <div class="flex-column d-flex">
                            <a class="pb-2 pb-lg-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/">Home</a>
                            <a class="pb-2 pb-lg-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/unsere-beratung">Unsere Beratung</a>
                            <a class="pb-2 pb-lg-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/ueber-uns">Über uns</a>
                            <a class="pb-2 pb-lg-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/lebensphase">Ihre Lebensphase</a>
                            <a class="pb-2 pb-lg-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/karriere">Karriere</a>
                            <!-- <a class="pb-4 text-white  text-decoration-none" href="https://www.pfpartners.de/finanzakademie">Finanzakademie</a> -->
                        </div>
                       
                    </div>
                    <div class="col-6 d-none d-lg-flex d-xl-flex">
                        <div class="row">
                        <p class="m-0 pb-6 pt-4 gradient-text">Ihre Lebensphase</p>
                        <div class="flex-column d-flex">
                            <a class="pb-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/lebensphase/berufsstart">Berufsstart</a>
                            <a class="pb-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/lebensphase/ausland">Im Ausland</a>
                            <a class="pb-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/lebensphase/gruendung">In Gründung</a>
                            <a class="pb-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/lebensphase/kinder-familie">Kinder & Familie</a>
                            <a class="pb-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/lebensphase/immobilien">Hausbau und Immobilien-Erwerb</a>
                            <a class="pb-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/lebensphase/erfolgskurs">Auf Erfolgskurs</a>
                            <a class="pb-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/lebensphase/vor-rente">Vor der Rente</a>
                            <a class="pb-4 hover-text  text-decoration-none" href="https://www.pfpartners.de/lebensphase/in-rente">In Rente</a>
                        </div>
                    </div>
                    </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
        <div class="pt-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center text-lg-start">
            <p class="pb-4 pb-lg-6 gradient-text">Kontakt zu PFP</p>
        <!-- phone icon -->
    <div class="pb-4 d-flex justify-content-center justify-content-lg-start">
        <a class="link-primary d-flex align-items-center text-decoration-none" href="tel:+4969380797900">
            <div class="phone-icon"></div>
            <p class="m-0 mx-3 hover-text subtitle ">+49 (69) 380 79 79 00</p>
        </a>
    </div>
    <!-- end -->
    <!-- email icon -->
    <div class="mt-2 pb-4 d-flex justify-content-center justify-content-lg-start">
        <a class="link-primary d-flex align-items-center text-decoration-none" href="mailto:info@pfpartners.de">
            <div class="email-icon"></div>
            <p class="m-0 mx-3 hover-text subtitle ">info@pfpartners.de</p>
        </a>
    </div>
    <!-- end -->
        <div class="pb-4 d-flex justify-content-center justify-content-lg-start">
            <a class=" w-75 primary-button d-flex align-items-center justify-content-center text-decoration-none" href="https://www.pfpartners.de/kontakt">
                Kontakt & Standorte</a>
        </div>
        <div class="d-flex justify-content-center d-flex d-lg-none">
            <a class="w-75 w-lg-100 primary-button p-2 px-4 d-flex justify-content-center align-items-center" href="https://www.pfpartners.de/karriere">Karriere</a>
        </div>
            <div class="d-flex py-2 mt-4">
                <!-- <a href=""class="linkedin-button social-media-button mx-2"></a> -->
                <!-- <a href=""class="twitter-button social-media-button mx-2"></a> -->
                <!-- <a href=""class="facebook-button social-media-button mx-2"></a>-->
                <!-- <a href=""class="xing-button social-media-button mx-2"></a> -->
                <!-- <a href=""class="email-button social-media-button mx-2"></a>     -->
            </div>
        </div>
    </div>
    <!-- footer menu -->
    <!-- footer credits policies -->
    <div class="container">
            <div class="m-0 row">
            <div class="pb-4 pb-lg-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center  justify-content-lg-start"><img class="vdvm-logo"src="https://www.pfpartners.de/images/Bootstrap_karriere/vdvm-logo.png" alt=""></div>
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center  justify-content-lg-end  align-items-center">
                <div class="row">
                    <div class="px-4 col-xl-4 col-lg-4 col-md-12 col-md-12 d-flex justify-content-center justify-content-md-center justify-content-sm-center">
                    <a class="text-decoration-none" href="https://www.pfpartners.de/impressum"><p class="m-0 py-1 hover-text"> Impressum</p></a>
                    </div>
                    <div class="px-4 col-xl-4 col-lg-4 col-md-12 col-md-12 d-flex justify-content-center justify-content-md-center justify-content-sm-center">
                    <a class="text-decoration-none" href="https://www.pfpartners.de/datenschutz"><p class="m-0 py-1 hover-text" >Datenschutz</p></a>
                    </div> 
                    <div class="px-4 col-xl-4 col-lg-4 col-md-12 col-md-12 d-flex justify-content-center justify-content-md-center justify-content-sm-center">
                    <a class="text-decoration-none" href="https://www.pfpartners.de/agb"><p class="m-0 py-1  hover-text">AGB</p></a>
                    </div>
                </div>
            </div>
        </div>
        
        <hr class="text-white">

        <div class="d-flex flex-row ">
            <div class="col-xl-6 xol-lg-6 col-md-12 col-sm-12 d-flex justify-content-xl-start justify-content-lg-start justify-content-md-center justify-content-sm-center">
           <p class="text-white subtitle">
            © 2022 PrivateFinancePartners.</p> 
            </div>
           <div class="col-6 d-none d-lg-flex d-xl-flex justify-content-end">
           <p class="text-white subtitle">Durch Wissen mehr Vermögen.</p>
            </div>
        </div>
        
    </div>
    <!-- end footer credits policies -->

   
</div>
</div>
<!-- footer end -->

</footer>


</html>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/lib/bootstrap-4.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/lib/bootstrap.bundle.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/lib/popper.js"></script>
<!-- <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/lib/jquery-3.2.1.slim.min.js"></script> -->
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/master.js"></script>

<script           defer           type="text/javascript"           data-mount-in="#join-widget"           src="https://join.com/api/widget/bundle/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXR0aW5ncyI6eyJzaG93Q2F0ZWdvcnlGaWx0ZXIiOnRydWUsInNob3dMb2NhdGlvbkZpbHRlciI6dHJ1ZSwic2hvd0VtcGxveW1lbnRUeXBlRmlsdGVyIjp0cnVlLCJsYW5ndWFnZSI6ImRlIiwiam9ic1BlclBhZ2UiOjI1fSwiam9icyI6eyJlbXBsb3ltZW50VHlwZUlkcyI6WzIsNV19LCJkZXNpZ24iOnsic2hvd0xvZ28iOnRydWUsInNob3dMb2NhdGlvbiI6dHJ1ZSwic2hvd0VtcGxveW1lbnRUeXBlIjp0cnVlLCJzaG93Q2F0ZWdvcnkiOnRydWUsImNvbG9ycyI6eyJ3aWRnZXQiOnsiYmFja2dyb3VuZCI6IiNGQkZCRkIiLCJmaWx0ZXJCb3JkZXIiOiIjRDRENEQ4IiwicGFnaW5hdGlvbiI6IiNDMjhCMDAifSwiam9iQ2FyZCI6eyJzaGFkb3ciOiIjRDRENEQ4IiwiYmFja2dyb3VuZCI6IiNGRkZGRkYiLCJwcmltYXJ5VGV4dCI6IiM0MDQwNDAiLCJzZWNvbmRhcnlUZXh0IjoiIzUyNTI1QiJ9fX0sInZlcnNpb24iOjIsImNvbXBhbnlQdWJsaWNJZCI6IjA3MTg4OGU1MmY1OTU5ZjBjOWQ2YzJmMjRjNWM1NmE0IiwiaWF0IjoxNjY2ODY0NTE1LCJqdGkiOiJkNTczZTRkMC05MjVlLTQyNjAtYjM0Ni0xYTY4ZWFlM2IxNGQifQ.Mc2vrQDcmR1E8ao4nlTb2g8EAKFnwcLNLtiXPIDVnic"         ></script>
 <script           defer           type="text/javascript"           data-mount-in="#join-widget-all"           src="https://join.com/api/widget/bundle/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXR0aW5ncyI6eyJzaG93Q2F0ZWdvcnlGaWx0ZXIiOnRydWUsInNob3dMb2NhdGlvbkZpbHRlciI6dHJ1ZSwic2hvd0VtcGxveW1lbnRUeXBlRmlsdGVyIjp0cnVlLCJsYW5ndWFnZSI6ImRlIiwiam9ic1BlclBhZ2UiOjI1fSwiam9icyI6e30sImRlc2lnbiI6eyJzaG93TG9nbyI6dHJ1ZSwic2hvd0xvY2F0aW9uIjp0cnVlLCJzaG93RW1wbG95bWVudFR5cGUiOnRydWUsInNob3dDYXRlZ29yeSI6dHJ1ZSwiY29sb3JzIjp7IndpZGdldCI6eyJiYWNrZ3JvdW5kIjoiI0ZCRkJGQiIsImZpbHRlckJvcmRlciI6IiNENEQ0RDgiLCJwYWdpbmF0aW9uIjoiI0MyOEIwMCJ9LCJqb2JDYXJkIjp7InNoYWRvdyI6IiNENEQ0RDgiLCJiYWNrZ3JvdW5kIjoiI0ZGRkZGRiIsInByaW1hcnlUZXh0IjoiIzQwNDA0MCIsInNlY29uZGFyeVRleHQiOiIjNTI1MjVCIn19fSwidmVyc2lvbiI6MiwiY29tcGFueVB1YmxpY0lkIjoiMDcxODg4ZTUyZjU5NTlmMGM5ZDZjMmYyNGM1YzU2YTQiLCJpYXQiOjE2NjY4NjQxMDIsImp0aSI6ImUzNjU3NzBhLWM1MWEtNDc4Ni04NTUzLTA1MmMyYjczMWFhMiJ9.bvOLpUYaFV0FAjUSYjOk0ETjO7dY99rc6Z4ToJi3uh0"         ></script>  

