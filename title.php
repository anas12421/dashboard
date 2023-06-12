<?php
$title='';
$url=$_SERVER['REQUEST_URI'];
$after_explode_title=explode('/',$url);
$after_end=end($after_explode_title);
$explode_second=explode('.',$after_end);

// All Titles

// user title
if(in_array('user',$after_explode_title)){
	if(in_array('user_list',$explode_second)){
		$title = 'Users List';
	}

	if(in_array('edit_user',$explode_second)){
		$title = 'Users Edit';
	}

	if(in_array('profile',$explode_second)){
		$title = 'Profile';
	}

}


else{
	$title = 'Dashboard';
}


// menu_title
if(in_array('menu',$after_explode_title)){
	if(in_array('menu_list',$explode_second)){
		$title = 'Menu List';
	}

	if(in_array('add_menu',$explode_second)){
		$title = 'Menu Add';
	}

	if(in_array('edit_menu',$explode_second)){
		$title = 'Menu Edit';
	}

}

// expertise_title
if(in_array('expertise',$after_explode_title)){
	if(in_array('expertise_info',$explode_second)){
		$title = 'Expertise Details';
	}

	if(in_array('edit_expertise',$explode_second)){
		$title = 'Expertise Edit';
	}

	// if(in_array('edit_menu',$explode_second)){
	// 	$title = 'Menu Edit';
	// }

}

// logo_title
if(in_array('logo',$after_explode_title)){
	$title = 'Logo Details';

}

// Banner_title
if(in_array('banner',$after_explode_title)){
	$title = 'Banner Details';

}

// contact title
if(in_array('contact',$after_explode_title)){
	if(in_array('contact_info',$explode_second)){
		$title = 'Contact Info List';
	}

	if(in_array('view_contact',$explode_second)){
		$title = 'Contact View';
	}
}

// about title
if(in_array('about',$after_explode_title)){
	if(in_array('about',$explode_second)){
		$title = 'About Details';
	}

	if(in_array('edit_about',$explode_second)){
		$title = 'About Edit';
	}

}

// service title
if(in_array('service',$after_explode_title)){
	if(in_array('service',$explode_second)){
		$title = 'Service Details';
	}

	if(in_array('edit_service',$explode_second)){
		$title = 'Service Edit';
	}

}

// portfolio title
if(in_array('portfolio',$after_explode_title)){
	if(in_array('portfolio',$explode_second)){
		$title = 'Portfolio Details';
	}

	if(in_array('edit_portfolio',$explode_second)){
		$title = 'Portfolio Edit';
	}

}

// copyright title
if(in_array('copy',$after_explode_title)){
	if(in_array('copyright',$explode_second)){
		$title = 'Copyright Details';
	}

}




?>