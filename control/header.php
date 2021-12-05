<?php  

switch ($_SERVER['SCRIPT_NAME']) {
	case '/OFOS/view/login-form.php':
		 $CURRENT_PAGE = "Login";
		 $PAGE_TITLE = "Login Page";
		break;

		case '/OFOS/view/registration-form.php':
		 $CURRENT_PAGE = "Registration ";
		 $PAGE_TITLE = "Registration  Page";
		break;

		case '/OFOS/view/home-page.php':
		 $CURRENT_PAGE = "Home";
		 $PAGE_TITLE = "Home Page";
		break;

		case '/OFOS/view/profile.php':
		 $CURRENT_PAGE = "Profile ";
		 $PAGE_TITLE = "Profile Page";
		break;

		case '/OFOS/view/changepassword.php':
		 $CURRENT_PAGE = "Change Password";
		 $PAGE_TITLE = "Change Password Page";
		break;

		case '/OFOS/view/View-Menu.php':
		 $CURRENT_PAGE = "View-Menu";
		 $PAGE_TITLE = "View-Menu Page";
		break;

		case '/OFOS/view/View-Order-Details.php':
		 $CURRENT_PAGE = "View-Order-Details ";
		 $PAGE_TITLE = "View-Order-Details Page";
		break;

		case '/OFOS/view/Food-item.php':
		 $CURRENT_PAGE = "Food Item ";
		 $PAGE_TITLE = "Food Item Page";
		break;
	
	default:
		$CURRENT_PAGE = "Home";
		 $PAGE_TITLE = "Home Page";

		break;
		
}


?>