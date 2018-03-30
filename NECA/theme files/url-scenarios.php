<?php 

// This file outlines scenario URLs that can be used for testing purposes.

	// Form URLS
	
		// Account » Create (Logged Out)
		
		// http://localhost:8888/neca/membership/account/create/?trackingid=23FG567&firstName=Jordy&lastName=Pickel&email=psuhiker%2Bcreate@gmail.com&company=Pickel%20Web%20Design&phone=814-883-0311&address_one=123 Fake Street&address_two=Building 4&city=Anytown&state=TN&zip=12345
		
		// Account Create Live Member Bypass Option
		
		// http://www.necainc.org/membership/account/create/?trackingid=23FG567&code=xyz&firstName=Tony&lastName=Craske&email=tony.craske@azelis.com&company=Azelis&phone=1-905-595-2615&address_one=&address_two=&city=&state=&zip=

	// Processing URLS
	
	    // Saving Event Registration after PayPal
	    
	    // http://localhost:8888/neca/event/payment/paypal/?firstname=Jordy&lastname=Pickel&company=Pickel%20Web%20Design&email=psuhiker@gmail.com&phone=814-883-0311&event=New%20York%20City%202017&transactionid=12345ABCD&creditcardname=Jordache%20Pickel&paid=345.00&tickets=1&membership=yes&notes=My%20Notes&membership=checked
		
		// Account » Create » Update Profile (System has just Logged In)
		
		// http://localhost:8888/neca/membership/account/processing/?update&company=Pickel%20Web%20Design&linkedin=linkedinuser&twitter=twitteruser&phone=814-883-0311&address_one=123 Fake Street&address_two=Building 4&city=Anytown&state=TN&zip=12345
		
		// Membership » Renew (Logged In)
		
		// http://localhost:8888/neca/membership/renew/processing/?update
		
		// Events » Register (Logged In)
		
		// http://localhost:8888/neca/event/processing/?membership=unchecked&tickets=1&firstName=Jordy&lastName=Pickel&email=psuhiker@gmail.com&company=Pickel%20Web%20Design&event=NECA%20Montr%C3%A9al&price=250.00
		
		// Events » Register (Logged In) » Update Account
		
		// 
		
		// Events » Register (Logged Out)
		
		// http://localhost:8888/neca/event/processing/?membership=unchecked&tickets=1&firstName=Jordy&lastName=Pickel&email=psuhiker@gmail.com&company=Pickel Web Design&event=NECA Montréal&price=275.00&phone=814-883-0311
		
		// Events » Register (Logged Out) » Include Membership
		
		// http://localhost:8888/neca/event/processing/?membership=checked&tickets=1&firstName=Jordy&lastName=Pickel&email=psuhiker@gmail.com&company=Pickel Web Design&event=NECA Montréal&price=275.00&phone=814-883-0311&address_one=123 Fake Street&address_two=&city=Ardmore&state=PA&zip=19003
		
		// http://localhost:8888/neca/event/processing/?membership=checked&tickets=1&firstName=New&lastName=Member&email=psuhiker@gmail.com&company=CompanyInc&event=New%20York%20City%202017&price=295&phone=814-883-0311&address_one=707%20Lorraine%20Ave&address_two=&city=Ardmore&state=PA&zip=19003
		
	// Payments
	
		// Membership » New Member
		
		// http://localhost:8888/neca/membership/application/payment/?display_name=Bailey%20Pickel&display_email=asdf@gmail.com&display_company=asdfasdf&display_phone=777-555-6789&display_price=100.00
		
		// Membership » Renew Membership
		
		// http://localhost:8888/neca/membership/renew/?display_name=Jordy%20Pickel&display_email=psuhiker@gmail.com&display_company=Pickel%20Web%20Design&display_phone=814-883-0311&display_price=100.00
		
		// Donation
		
		// http://localhost:8888/neca/donate/payment/?display_name=Jordy%20Pickel&display_email=psuhiker@gmail.com&display_phone=814-883-0311&display_company=PWD&display_address=123%20Fake%20Street&display_city=Fakeville&display_state=AL&display_zip=19003&display_price=250.00
		
		// Events » Register » Logged In User
		
		// http://localhost:8888/neca/event/payment/?membership=unchecked&tickets=1&firstName=Jordy&lastName=Pickel&email=psuhiker@gmail.com&company=Pickel%20Web%20Design&event=NECA%20Montr%C3%A9al&price=250.00
		
		// Events » Register » Logged Out User
		
		// http://localhost:8888/neca/event/payment/?membership=unchecked&tickets=1&firstName=Jordy&lastName=Pickel&email=psuhiker@gmail.com&company=Pickel Web Design&event=NECA Montréal&price=275.00&phone=814-883-0311
		
		// Events » Register » Logged Out User » Include Membership
		
		// http://localhost:8888/neca/event/payment/?membership=checked&tickets=1&firstName=Jordy&lastName=Pickel&email=psuhiker@gmail.com&company=Pickel Web Design&event=NECA Montréal&price=275.00&phone=814-883-0311 
		
	// Membership Administration
	
		// Approve Applicant (Logged In)
		
		// http://localhost:8888/neca/membership/membership-approve-deny/?status=approved?status=approve&firstName=Jordy&lastName=Pickel&company=Pickel%20Web%20Design&email=psuhiker@gmail.com&phone=814-883-0311&applicantID=544
		
		// Reject Applicant (Logged In)
		
		// http://localhost:8888/neca/membership/membership-approve-deny/?status=denied?status=approve&firstName=Jordy&lastName=Pickel&company=Pickel%20Web%20Design&email=psuhiker@gmail.com&phone=814-883-0311&applicantID=544
		
		// Changing the Pending User as Approved
		
		// http://localhost:8888/neca/pending/pickel-jordy-pickel-web-design-2/?approved-625
		
		// Changing the Pending User as Denied
		
		// http://localhost:8888/neca/pending/pickel-jordy-pickel-web-design-2/?denied-625
		
	// Confirmation Pages
	
		// Donate
		
		// http://localhost:8888/neca/donate/confirmation/?display_name=Jordy%20Pickel&display_email=psuhiker@gmail.com&display_phone=814-883-0311&display_company=Pickel%20Web%20Design&display_address=123%20Fake%20Street&display_city=Anytown&display_state=PA&display_zip=19003&display_price=250.00
		
		// Basic Event
		
		// http://localhost:8888/neca/event/confirmation/?tickets=1&firstName=Jordy&lastName=Pickel&email=psuhiker@gmail.com&company=Chemco%20Industries&event=New%20York%20City%202017&price=295.00&phone=
		
		// Invoice Event
		
		// http://localhost:8888/neca/event/confirmation/?template=invoice&tickets=1&firstName=Jordy&lastName=Pickel&email=psuhiker@gmail.com&company=Pickel%20Web%20Design&event=New%20York%20City%202017&price=345.00&phone=814-883-0311&transactionid=12345ABCD&creditcardname=Jordache%20Pickel
		
		
	
	// Pages
	
		// Donation » Form Link
		
		// http://localhost:8888/neca/donate/donate-form/?level=50.00
		// http://localhost:8888/neca/donate/donate-form/?level=250.00
		// http://localhost:8888/neca/donate/donate-form/?level=500.00
    
?>