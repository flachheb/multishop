<?php

/* __string_template__8fc8934c14f291bb24baa83ff5f864ff5c8f5b922679d45944646445655b39ba */
class __TwigTemplate_86cf95b9f21e3c739dd41750a06ef0608dcb062952de866e1941fc743d3581d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produits • PrestaShop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.2.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '8961a0c518623256836d5a7d316afcc3';
    var token_admin_orders = '220915ad2be1bb5eb5b12e7cced76e6d';
    var token_admin_customers = '0012f2675b83e2878904ddd778a0ce32';
    var token_admin_customer_threads = 'b3404546079d7021239560ccdb448471';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '822f1c816cbc7c394a54dc541c8eefb3';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/adminboutix/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/adminboutix/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminboutix\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/adminboutix/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/adminboutix/public/bundle.js\"></script>


  

";
        // line 69
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminDashboard&amp;token=690316e1e1196948ddd2e5bcdc23f2ea\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminOrders&amp;token=220915ad2be1bb5eb5b12e7cced76e6d\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://boutix.store/new/adminboutix/index.php/module/manage?token=e72901ed3c5d14ef5acc76361c368832\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=27056ae9f3d475179443e767502d7cf7\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://boutix.store/new/adminboutix/index.php/product/new?token=e72901ed3c5d14ef5acc76361c368832\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCategories&amp;addcategory&amp;token=a09923c06c0c01d3c2bc8d2d39cd1fab\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"84\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog?-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM\"
        data-post-link=\"http://boutix.store/new/adminboutix/index.php?controller=AdminQuickAccesses&token=472ab494563e1432970c09f651da59ac\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminQuickAccesses&token=472ab494563e1432970c09f651da59ac\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/adminboutix/index.php?controller=AdminSearch&amp;token=2a330b9ea77a62b6a4ae820b69528b57\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">RECHERCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/flachheb%40gmail.com.jpg\" /><br>
      <span>Faissal Lachheb</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminEmployees&amp;token=822f1c816cbc7c394a54dc541c8eefb3&amp;id_employee=2&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminLogin&amp;token=2edee634caa6fdc692a27da8436a8b85&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div id=\"shop-list\" class=\"shop-list dropdown ps-dropdown stores\">
    <span class=\"link\" data-toggle=\"dropdown\">
      <span class=\"selected-item\">
                  newboutikx
                <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
      </span>
    </span>
    <div class=\"dropdown-menu ps-dropdown-menu\">
      <ul class=\"items-list\"><li><a class=\"dropdown-item\" href=\"/adminboutix/index.php/product/catalog?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM&amp;setShopContext=\">Toutes les boutiques</a></li><li class=\"group\"><a class=\"dropdown-item\" href=\"/adminboutix/index.php/product/catalog?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM&amp;setShopContext=g-1\">groupe Default</a></li><li class=\"shop\"><a class=\"dropdown-item \" href=\"/adminboutix/index.php/product/catalog?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM&amp;setShopContext=s-1\">PrestaShop</a><a class=\"link-shop\" href=\"/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li><li class=\"group\"><a class=\"dropdown-item\" href=\"/adminboutix/index.php/product/catalog?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM&amp;setShopContext=g-2\">groupe newboutik</a></li><li class=\"shop active\"><a class=\"dropdown-item \" href=\"/adminboutix/index.php/product/catalog?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM&amp;setShopContext=s-2\">newboutikx</a><a class=\"link-shop\" href=\"/new/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li></ul>

    </div>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminDashboard&amp;token=690316e1e1196948ddd2e5bcdc23f2ea\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminOrders&amp;token=220915ad2be1bb5eb5b12e7cced76e6d\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Commandes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminOrders&amp;token=220915ad2be1bb5eb5b12e7cced76e6d\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminInvoices&amp;token=28848bb0f4a49b6fa8efed67beada7b3\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminSlip&amp;token=4f3d47e22fe47de19ce01e7d4bb8856f\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminDeliverySlip&amp;token=5128c7da4d8e1798a05cf72e240949d3\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCarts&amp;token=c5e74a7ce296f83b649fb6e9aa3f3a50\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/adminboutix/index.php/product/catalog?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogue
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/adminboutix/index.php/product/catalog?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCategories&amp;token=a09923c06c0c01d3c2bc8d2d39cd1fab\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminTracking&amp;token=9625dd3a30b909a4b2bb48e23a599d2e\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminAttributesGroups&amp;token=280748e656f4a7fd7f72f07a8f7b2db8\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminManufacturers&amp;token=45b6423b0adb36df24f5b1c6a7b43215\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminAttachments&amp;token=21efc46462c183a6ba776e960f54b253\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCartRules&amp;token=27056ae9f3d475179443e767502d7cf7\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/adminboutix/index.php/stock/?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCustomers&amp;token=0012f2675b83e2878904ddd778a0ce32\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clients
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCustomers&amp;token=0012f2675b83e2878904ddd778a0ce32\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminAddresses&amp;token=c8a6c6d81dcb44a424e8b14aa50225ca\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCustomerThreads&amp;token=b3404546079d7021239560ccdb448471\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    SAV
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCustomerThreads&amp;token=b3404546079d7021239560ccdb448471\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminOrderMessage&amp;token=3c00501899fa9814a472a36be38751c3\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminReturn&amp;token=2600ca8dea813d038fa4f043f4a5ccd0\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminStats&amp;token=2dfd362ee1b24c56577c067b360f090f\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiques
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"42\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminThemes&amp;token=1b5fd6d46602e55408d48717128d1217\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Apparence
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminThemes&amp;token=1b5fd6d46602e55408d48717128d1217\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCmsContent&amp;token=af8f05fb09d6e417fb3901dd49b7ed55\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminModulesPositions&amp;token=36dc9307e161bd8a7a8d5c652a67a9c6\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminImages&amp;token=44c5c30b348d125dff5b361baac6dee9\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminLinkWidget&amp;token=d88dcc4be7827e78854e008f2a4271f0\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCarriers&amp;token=15216e3edf3a376b0d2cc35df808dbcf\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Livraison
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCarriers&amp;token=15216e3edf3a376b0d2cc35df808dbcf\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminShipping&amp;token=3f54841caecdcc61c0ff1076b47fdc1a\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminPaymentPreferences&amp;token=2b3cb37071b203cae34505b8bbbb9b1b\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Paiement
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminPaymentPreferences&amp;token=2b3cb37071b203cae34505b8bbbb9b1b\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminLocalization&amp;token=a90d2f419e139f79fbcdcbaf30a721e5\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminLocalization&amp;token=a90d2f419e139f79fbcdcbaf30a721e5\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCountries&amp;token=19c94e5aa87c14e2ccf3ec9bba6ffb0a\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminTaxes&amp;token=d820ae7d84305883b94b2cd5f88fc40f\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminTranslations&amp;token=c2b0c4e031d07c51a73897b8d029630b\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminPreferences&amp;token=7cb70efa71badb5c584cccad335dad79\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Paramètres de la boutique
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminPreferences&amp;token=7cb70efa71badb5c584cccad335dad79\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminOrderPreferences&amp;token=f8418037e2f938fefd4c1866cd12bbfd\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminPPreferences&amp;token=da9b37cf5d20e3068e52153d0ff7d877\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCustomerPreferences&amp;token=77c389138e61a311c9928f2549bb46f0\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminContacts&amp;token=89d6670da3e466c36a3873706cb0ab60\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminMeta&amp;token=8db356b219737cb1e6e03e3e0b30267a\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminSearchConf&amp;token=149658d505971a13ad3761db7e27f03d\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminGamification&amp;token=db876298daaa03b2f09b83176e427339\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminInformation&amp;token=34f55e4058cff3d93a0ae78faffec86a\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Paramètres avancés
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminInformation&amp;token=34f55e4058cff3d93a0ae78faffec86a\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminCatalog&amp;token=f0afe5811da83f5e9a83842c2d8f569b\">Catalogue</a>
                  </li>
      
              <li>
                      <a href=\"/adminboutix/index.php/product/catalog?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM\">Produits</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Produits    </h2>
  

  
    <div class=\"toolbar-icons\">
                                  
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/adminboutix/index.php/module/catalog?_token=w-Bg3g6KEZ6bXLhLJufYvP5UT54VwWjX_Mv5hG2otoM\"          title=\"Modules et services recommandés\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Modules et services recommandés</span>
        </a>
            
                  <a class=\"toolbar-button\" href=\"http://help.prestashop.com/fr/doc/AdminProducts?version=1.7.2.4&amp;country=fr\" title=\"Aide\">
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aide</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=flachheb%40gmail.com&amp;firstname=Faissal&amp;lastname=Lachheb&amp;website=http%3A%2F%2Fboutix.store%2Fnew%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/adminboutix/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=flachheb%40gmail.com&amp;firstname=Faissal&amp;lastname=Lachheb&amp;website=http%3A%2F%2Fboutix.store%2Fnew%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 910
        $this->displayBlock('content_header', $context, $blocks);
        // line 911
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 912
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 913
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 914
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"m-t-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"m-t-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"m-t-2\">
    Merci.
  </p>
  <a href=\"http://boutix.store/new/adminboutix/index.php?controller=AdminDashboard&amp;token=690316e1e1196948ddd2e5bcdc23f2ea\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 8.288s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=flachheb%40gmail.com&amp;firstname=Faissal&amp;lastname=Lachheb&amp;website=http%3A%2F%2Fboutix.store%2Fnew%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/adminboutix/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=flachheb%40gmail.com&amp;firstname=Faissal&amp;lastname=Lachheb&amp;website=http%3A%2F%2Fboutix.store%2Fnew%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1082
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 69
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 910
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 911
    public function block_content($context, array $blocks = array())
    {
    }

    // line 912
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 913
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1082
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__8fc8934c14f291bb24baa83ff5f864ff5c8f5b922679d45944646445655b39ba";
    }

    public function getDebugInfo()
    {
        return array (  1161 => 1082,  1156 => 913,  1151 => 912,  1146 => 911,  1141 => 910,  1132 => 69,  1124 => 1082,  954 => 914,  951 => 913,  948 => 912,  945 => 911,  943 => 910,  98 => 69,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__8fc8934c14f291bb24baa83ff5f864ff5c8f5b922679d45944646445655b39ba", "");
    }
}
