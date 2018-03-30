<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Development File</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    
    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <?php 
        // Colors
        $navy = '#0d2d3f';
        $carbonBlue = '#274c64';
        $grayBlue = '#5f8494';
        $foggyBlue = '#8db3c6';
        $gold = '#e9b944';
        $mistyWhite = '#e7eef2';
        $gunmetalBlack = '#1d2128';
        $white = '#ffffff';
        $black = '#000000';
        // Font Sizes
        $default = '14pt';
        $xs = '0.7em';
        $sm = '0.75em';
        $md = '1.75em';
        $lg = '2.5em';
        $xl = '3.7em';
        // Line Height
        $lineHeight = '1.25';
        // Font Weight
        $regular = '400';
        $bold = '700';
        // Font Families
        $defaultFont = 'Nudista Web';
        $secondaryFont = 'Bressay';
        // Padding
        $pDefault = '10px';
        $pXS = $pDefault * 0.33 . 'px';
        $pSM = $pDefault * 0.5 . 'px';
        $pLG = $pDefault * 1.5 . 'px';
        $pXL = $pDefault * 2 . 'px';
        $pXXL = $pDefault * 4 . 'px';
        // Margin
        $mDefault = '10px';
        $mSM = $pDefault * 0.5 . 'px';
        $mLG = $pDefault * 1.5 . 'px';
        $mXL = $pDefault * 2 . 'px';
        $mXXL = $pDefault * 4 . 'px';
    ?>
    <style><!--
    	body {
    		margin: 0px 0px 20px 0px;
    	}
    	.container {
    		width: 100%;
    		max-width: 1600px;
    	}
        code {
    		padding: 10px 20px;
    		font-size: 12pt;
    		margin: 10px 0px;
    		display: inline-block;
    	}
    	    @media all and (max-width: 1024px) {
    	    	code {
                    font-size: 10pt;
                }
            }
	    code:first-child {
    		margin-left: 40px;
    	}
    	    @media all and (max-width: 768px) {
    	    	code:first-child {
    	    		margin-left: 0px;
                }
    	    }
    	tech {
    		position: relative;
    		z-index: 1;
    		clear: both;
    		font-size: 9pt;
    		font-family: Arial;
    		margin: 0px 0px 0px 40px;
    		padding: 20px;
    		display: inline-block;
    		color: #333;
    		float: right;
    		background-color: rgba(0,0,0,0.025);
    		line-height: 1.5;
    		min-width: 300px;
    	}
    	    @media all and (max-width: 768px) {
    	    	tech {
                    box-sizing: border-box;
                    float: none;
                    width: 80%;
                    margin-bottom: 50px;
                }
            }
    	tech:before {
    		content: "Specs:";
    		font-size: 8pt;
    		text-transform: uppercase;
    		padding: 0px 0px 5px 0px;
    	}
        tech ul {
        	border-top: 1px solid #ccc;
    		padding: 5px 20px 0px 10px;
    		margin: 0px;
    	}
    	tech ul li {
    		list-style: none;
    	}
    	tech ul li:before {
    		content:  "- ";
    	}
    	tech ul li.heading {
    		margin: 5px 0px;
    		text-decoration: underline;
    	}
    	tech ul li.heading:first-child {
    		margin-top: 0px;
    	}
    	tech ul li.heading:before {
    		display: none;
    	}
    	.thumbnail {
    		height: 30vh;
    		position: relative;
    		border: none;
    	}
        .spacer {
        	clear: both;
    		height: 40px;
    		width: 100%;
    		display: block;
    		border-top: 1px solid #efefef;
    		margin-top: 30px;
    	}
    	.marquee--navy, .headline--right, div.margin {
    		margin-right:  350px;
    	}
    	    @media all and (max-width: 768px) {
    	    	.marquee--navy, .headline--right, div.margin {
                    margin-right: 0px;
                }
            }
    --></style>
</head>
<body>
    
    <div class="col-xs-12 no-padding--horizontal bg--white position--fixed default-padding--top" style="z-index: 999;">
    
        <div class="container">
    
            <h1 class="lg-margin--bottom">PRA Digital Style Guide</h1>
            
            <div id="menu">
        
                <nav class="navbar">
                	<div class="navbar-header">
                		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                	        <span class="sr-only">Toggle navigation</span>
                	        <span class="icon-bar"></span>
                	        <span class="icon-bar"></span>
                	        <span class="icon-bar"></span>
                	    </button>
                	</div>
                	<div class="collapse navbar-collapse" id="navbar">
                		<ul class="nav navbar-nav" role="tablist">
                			<li role="presentation" class="active">
                			    <a href="#colors" aria-controls="colors" role="tab" data-toggle="tab">Colors</a>
                			</li>
                			<li role="presentation">
                			    <a href="#typography" aria-controls="typography" role="tab" data-toggle="tab">Typography</a>
                			</li>
                			<li role="presentation">
                			    <a href="#ux" aria-controls="ux" role="tab" data-toggle="tab">Links & Buttons</a>
                			</li>
                			<li role="presentation">
                			    <a href="#forms" aria-controls="forms" role="tab" data-toggle="tab">Form Elements</a>
                			</li>
                			<li role="presentation">
                			    <a href="#miscellaneous" aria-controls="miscellaneous" role="tab" data-toggle="tab">Miscellaneous</a>
                			</li>
                		</ul>
                    </div>
                </nav>
            
            </div>
            
        </div>
    
    </div>
    
    <div class="container">
    
        <div class="tab-content" style="margin-top: 150px;">
        	
        	<div role="tabpanel" class="tab-pane active" id="colors">
        	
        	    <div class="col-xs-12 col-sm-6 col-md-3 no-padding--horizontal">
        	    	<div class="thumbnail bg--navy">
        	    		<div class="position--bottom color--white default-padding--all col-xs-12">
        	    			Navy <span class="float--right default-padding--right"><?php echo $navy; ?></span>
        	    		</div>
        	    	</div>
        	    </div>
        	    
        	    <div>
        	    
        	    	<code>
        	    		&lt;div class="bg--navy"&gt;
        	    	</code>
        	    	
        	    	<code>
        	    		&lt;p class="color--navy"&gt;
        	    	</code>
        	    
        	    </div>
        	    
        	    <div class="clearfix"><br></div>
        	    
        	    <div class="col-xs-12 col-sm-6 col-md-3 no-padding--horizontal">
        	    	<div class="thumbnail bg--carbon-blue">
        	    		<div class="position--bottom color--white default-padding--all col-xs-12">
        	    			Carbon Blue <span class="float--right default-padding--right"><?php echo $carbonBlue; ?></span>
        	    		</div>
        	    	</div>
        	    </div>
        	    
        	    <div>
        	    
        	    	<code>
        	    		&lt;div class="bg--carbon-blue"&gt;
        	    	</code>
        	    	
        	    	<code>
        	    		&lt;p class="color--carbon-blue"&gt;
        	    	</code>
        	    
        	    </div>
        	    
        	    <div class="clearfix"><br></div>
        	    
        	    <div class="col-xs-12 col-sm-6 col-md-3 no-padding--horizontal">
        	    	<div class="thumbnail bg--gray-blue">
        	    		<div class="position--bottom color--white default-padding--all col-xs-12">
        	    			Gray Blue <span class="float--right default-padding--right"><?php echo $grayBlue; ?></span>
        	    		</div>
        	    	</div>
        	    </div>
        	    
        	    <div>
        	    
        	    	<code>
        	    		&lt;div class="bg--gray-blue"&gt;
        	    	</code>
        	    	
        	    	<code>
        	    		&lt;p class="color--gray-blue"&gt;
        	    	</code>
        	    
        	    </div>
        	    
        	    <div class="clearfix"><br></div>
        	    
        	    <div class="col-xs-12 col-sm-6 col-md-3 no-padding--horizontal">
        	    	<div class="thumbnail bg--foggy-blue">
        	    		<div class="position--bottom color--white default-padding--all col-xs-12">
        	    			Foggy Blue <span class="float--right default-padding--right"><?php echo $foggyBlue; ?></span>
        	    		</div>
        	    	</div>
        	    </div>
        	    
        	    <div>
        	    
        	    	<code>
        	    		&lt;div class="bg--foggy-blue"&gt;
        	    	</code>
        	    	
        	    	<code>
        	    		&lt;p class="color--foggy-blue"&gt;
        	    	</code>
        	    
        	    </div>
        	    
        	    <div class="clearfix"><br></div>
        	    
        	    <div class="col-xs-12 col-sm-6 col-md-3 no-padding--horizontal">
        	    	<div class="thumbnail bg--gold">
        	    		<div class="position--bottom color--white default-padding--all col-xs-12">
        	    			Gold <span class="float--right default-padding--right"><?php echo $gold; ?></span>
        	    		</div>
        	    	</div>
        	    </div>
        	    
        	    <div>
        	    
        	    	<code>
        	    		&lt;div class="bg--gold"&gt;
        	    	</code>
        	    	
        	    	<code>
        	    		&lt;p class="color--gold"&gt;
        	    	</code>
        	    
        	    </div>
        	    
        	    <div class="clearfix"><br></div>
        	    
        	    <div class="col-xs-12 col-sm-6 col-md-3 no-padding--horizontal">
        	    	<div class="thumbnail bg--misty-white">
        	    		<div class="position--bottom default-padding--all col-xs-12">
        	    			Misty White <span class="float--right default-padding--right"><?php echo $mistyWhite; ?></span>
        	    		</div>
        	    	</div>
        	    </div>
        	    
        	    <div>
        	    
        	    	<code>
        	    		&lt;div class="bg--misty-white"&gt;
        	    	</code>
        	    	
        	    	<code>
        	    		&lt;p class="color--misty-white"&gt;
        	    	</code>
        	    
        	    </div>
        	    
        	    <div class="clearfix"><br></div>
        	    
        	    <div class="col-xs-12 col-sm-6 col-md-3 no-padding--horizontal">
        	    	<div class="thumbnail bg--gunmetal-black">
        	    		<div class="position--bottom color--white default-padding--all col-xs-12">
        	    			Gunmetal Black <span class="float--right default-padding--right"><?php echo $gunmetalBlack; ?></span>
        	    		</div>
        	    	</div>
        	    </div>
        	    
        	    <div>
        	    
        	    	<code>
        	    		&lt;div class="bg--gunmetal-black"&gt;
        	    	</code>
        	    	
        	    	<code>
        	    		&lt;p class="color--gunmetal-black"&gt;
        	    	</code>
        	    
        	    </div>
        	    
        	    <div class="clearfix"><br></div>
        	    
        	    <div class="col-xs-12 col-sm-6 col-md-3 no-padding--horizontal">
        	    	<div class="thumbnail bg--white">
        	    		<div class="position--bottom default-padding--all col-xs-12">
        	    			White <span class="float--right default-padding--right"><?php echo $white; ?></span>
        	    		</div>
        	    	</div>
        	    </div>
        	    
        	    <div>
        	    
        	    	<code>
        	    		&lt;div class="bg--white"&gt;
        	    	</code>
        	    	
        	    	<code>
        	    		&lt;p class="color--white"&gt;
        	    	</code>
        	    
        	    </div>
        	    
        	    <div class="clearfix"><br></div>
        	    
        	    <div class="col-xs-12 col-sm-6 col-md-3 no-padding--horizontal">
        	    	<div class="thumbnail bg--black">
        	    		<div class="position--bottom color--white default-padding--all col-xs-12">
        	    			Black <span class="float--right default-padding--right"><?php echo $black; ?></span>
        	    		</div>
        	    	</div>
        	    </div>
        	    
        	    <div>
        	    
        	    	<code>
        	    		&lt;div class="bg--black"&gt;
        	    	</code>
        	    	
        	    	<code>
        	    		&lt;p class="color--black"&gt;
        	    	</code>
        	    
        	    </div>
        	    
        	    <div class="clearfix"><br></div>
        	
        	</div>
        	
        	<div role="tabpanel" class="tab-pane" id="typography">
        		
        		<p class="font-size--md no-margin--bottom">Default Font: <?php echo $defaultFont; ?></p>
        		
        		<div class="lg-margin--bottom">
        		
        			<code>
        				&lt;p class="font-family--primary"&gt;
        			</code>
        		
        		</div>
        		
        		<p class="font-size--md font-family--secondary no-margin--bottom">Secondary Font: <?php echo $secondaryFont; ?></p>
        		
        		<div class="lg-margin--bottom">
        		
        			<code>
        				&lt;p class="font-family--secondary"&gt;
        			</code>
        		
        		</div>
        		
        		<div class="spacer"></div>
        		
        		<p class="no-margin--bottom">Default Font Size: <?php echo $default; ?></p>
        		
        		<div class="lg-margin--bottom">
        		
        			<code>
        				&lt;h1 class="font-size--default"&gt;
        			</code>
        		
        		</div>
        		
        		<p class="font-size--xs no-margin--bottom">Extra Small Font Size: <?php echo $xs; ?></p>
        		
        		<div class="lg-margin--bottom">
        		
        			<code>
        				&lt;p class="font-size--xs"&gt;
        			</code>
        		
        		</div>
        		
        		<p class="font-size--sm no-margin--bottom">Small Font Size: <?php echo $sm; ?></p>
        		
        		<div class="lg-margin--bottom">
        		
        			<code>
        				&lt;p class="font-size--sm"&gt;
        			</code>
        		
        		</div>
        		
        		<p class="font-size--md no-margin--bottom">Medium Font Size: <?php echo $md; ?></p>
        		
        		<div class="lg-margin--bottom">
        		
        			<code>
        				&lt;p class="font-size--md"&gt;
        			</code>
        		
        		</div>
        		
        		<p class="font-size--lg no-margin--bottom">Large Font Size: <?php echo $lg; ?></p>
        		
        		<div class="lg-margin--bottom">
        		
        			<code>
        				&lt;p class="font-size--lg"&gt;
        			</code>
        		
        		</div>
        		
        		<p class="font-size--xl no-margin--bottom">Extra Large Font Size: <?php echo $xl; ?></p>
        		
        		<div class="lg-margin--bottom">
        		
        			<code>
        				&lt;p class="font-size--xl"&gt;
        			</code>
        		
        		</div>
        		
        		<div class="spacer"></div>
    
                <tech>
                	<ul>
                		<li>font-family: <?php echo $defaultFont; ?></li>
                		<li>font-size: <?php echo $xl; ?></li>
                		<li>color: <?php echo $navy; ?></li>
                		<li>border-left: 12px solid <?php echo $navy; ?></li>
                		<li>font-weight: <?php echo $bold; ?></li>
                		<li>line-height: <?php echo $lineHeight; ?></li>
                		<li class="heading">&lt;strong&gt Tag:</li>
                		<li>color: <?php echo $grayBlue; ?></li>
                	</ul>
                </tech>
            
                <h1 class="headline">This is a <strong>Default</strong> Headline</h1>
                
                <div>
                
                	<code>
                		&lt;h1 class="headline"&gt;
                	</code>
                	
                	<code>
                		&lt;p class="headline"&gt;
                	</code>
                
                </div>
                
                <div class="spacer"></div>
                
                <tech>
                	<ul>
                		<li>font-family: <?php echo $defaultFont; ?></li>
                		<li>font-size: <?php echo $xl; ?></li>
                		<li>color: <?php echo $navy; ?></li>
                		<li>border-right: 12px solid <?php echo $navy; ?></li>
                		<li>font-weight: <?php echo $bold; ?></li>
                		<li>text-align: right</li>
                		<li>line-height: <?php echo $lineHeight; ?></li>
                		<li class="heading">&lt;strong&gt Tag:</li>
                		<li>color: <?php echo $grayBlue; ?></li>
                	</ul>
                </tech>
            
                <p class="headline--right">This is a <strong>Right-Aligned</strong> Headline</p>
                
                <div>
                
                	<code>
                		&lt;h1 class="headline--right"&gt;
                	</code>
                	
                	<code>
                		&lt;p class="headline--right"&gt;
                	</code>
                
                </div>
                
                <div class="spacer"></div>
                
                <tech>
                	<ul>
                		<li class="heading">Container:</li>
                		<li>background-color: <?php echo $navy; ?></li>
                		<li class="heading">Text:</li>
                		<li>font-family: <?php echo $defaultFont; ?></li>
                		<li>font-size: <?php echo $xl; ?></li>
                		<li>color: <?php echo $white; ?></li>
                		<li>border-left: 12px solid <?php echo $foggyBlue; ?></li>
                		<li>font-weight: <?php echo $bold; ?></li>
                		<li>line-height: <?php echo $lineHeight; ?></li>
                		<li class="heading">&lt;strong&gt Tag:</li>
                		<li>color: <?php echo $foggyBlue; ?></li>
                		<li>border-bottom: 10px solid <?php echo $foggyBlue; ?></li>
                		<li>white-space: nowrap</li>
                	</ul>
                </tech>
                
                <div class="marquee--navy">
                	
                	<h1 class="headline">This is a Headline on a <strong>Dark Background</strong></h1>
                	
                </div>
                
                <div>
                
                	<code>
                		&lt;div class="marquee--navy"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1 class="headline"&gt;
                	</code>
                
                </div>
                
                <div class="spacer"></div>
                    
                <tech>
                	<ul>
                		<li>font-family: <?php echo $defaultFont; ?></li>
                		<li>font-size: <?php echo $lg; ?></li>
                		<li>color: <?php echo $navy; ?></li>
                		<li>font-weight: <?php echo $bold; ?></li>
                		<li>line-height: <?php echo $lineHeight; ?></li>
                	</ul>
                </tech>
                
                <p class="headline--small">This is a <strong>Small</strong> Headline</p>
                
                <div>
                
                	<code>
                		&lt;h1 class="headline--small"&gt;
                	</code>
                	
                	<code>
                		&lt;p class="headline--small"&gt;
                	</code>
                
                </div>
                
                <div class="spacer"></div>
                
                <tech>
                    	<ul>
                    		<li>font-family: <?php echo $secondaryFont; ?></li>
                    		<li>font-size: <?php echo $md; ?></li>
                    		<li>color: <?php echo $grayBlue; ?></li>
                    		<li>font-weight: <?php echo $bold; ?></li>
                    		<li>line-height: <?php echo $lineHeight; ?></li>
                    	</ul>
                    </tech>
                
                    <p class="subheadline">This is a Secondary Headline</p>
                    
                    <div>
                    
                    	<code>
                    		&lt;h1 class="subheadline"&gt;
                    	</code>
                    	
                    	<code>
                    		&lt;p class="subheadline"&gt;
                    	</code>
                    
                    </div>
                
                <div class="spacer"></div>
                
                <tech>
                	<ul>
                		<li>font-family: <?php echo $defaultFont; ?></li>
                		<li>font-size: <?php echo $default; ?></li>
                		<li>color: <?php echo $black; ?></li>
                		<li>font-weight: <?php echo $regular; ?></li>
                		<li>line-height: <?php echo $lineHeight; ?></li>
                		<li>margin-bottom: <?php echo $mXL; ?></li>
                	</ul>
                </tech>
                
                <p>This is paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec consequat velit. Vivamus quis mi quis augue malesuada mattis sit amet a tellus. Quisque imperdiet commodo erat, a volutpat dolor sollicitudin ac.</p>
                <p>Integer nec blandit dolor. Quisque quam nunc, gravida eget convallis quis, dapibus non magna. Curabitur dolor mi, laoreet quis tempus vel, luctus id justo. Fusce finibus eleifend nisi quis finibus. Morbi lobortis blandit ante, quis iaculis dolor condimentum sit amet. Donec a mattis lorem, id scelerisque tellus.</p>
                
                <div>
                
                	<code>
                		&lt;p&gt;
                	</code>
                
                </div>
            
        	</div>
        	
        	<div role="tabpanel" class="tab-pane" id="ux">
        		
        		<tech>
        			<ul>
        				<li>color: <?php echo $gold; ?></li>
        				<li>background-color: <?php echo $mistyWhite; ?> (animated)</li>
        			</ul>
        		</tech>
        		
        		<p>Integer nec blandit dolor. <a href="#">This is a regular link</a>, gravida eget convallis quis, dapibus non magna. Curabitur dolor mi, laoreet quis tempus vel, luctus id justo. Fusce finibus eleifend nisi quis finibus. Morbi lobortis blandit ante, quis iaculis dolor condimentum sit amet. Donec a mattis lorem, id scelerisque tellus.</p>
        		
        		<div>
        		
        			<code>
        				&lt;a&gt;
        			</code>
        		
        		</div>
        		
        		<div class="spacer"></div>
        		
        		<tech>
        			<ul>
        				<li>font-family: <?php echo $defaultFont; ?></li>
        				<li>font-size: <?php echo $sm; ?></li>
        				<li>color: <?php echo $navy; ?></li>
        				<li>font-weight: <?php echo $bold; ?></li>
        				<li>border: 4px solid <?php echo $gold; ?> (animated)</li>
        			</ul>
        		</tech>
        		
        		<a class="link--bars">
        			<span>See Our Work</span>
        		</a>
        		
        		<div>
        		
        			<code>
        				&lt;a class="link--bars"&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;
        			</code>
        		
        		</div>
        		
        		<div class="spacer"></div>
        		
        		<tech>
        			<ul>
        				<li>font-family: <?php echo $defaultFont; ?></li>
        				<li>font-size: <?php echo $sm; ?></li>
        				<li>color: <?php echo $white; ?></li>
        				<li>font-weight: <?php echo $bold; ?></li>
        				<li>border: 4px solid <?php echo $gold; ?> (animated)</li>
        			</ul>
        		</tech>
        		
        		<div class="marquee--navy">
        		
            		<a class="link--bars--white">
            			<span>See Our Work</span>
            		</a>
        		
        		</div>
        		
        		<div>
        		
        			<code>
        				&lt;a class="link--bars--white"&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;
        			</code>
        		
        		</div>
        		
        		<div class="spacer"></div>
        		
        		<tech>
        			<ul>
        				<li>font-family: <?php echo $defaultFont; ?></li>
        				<li>font-size: <?php echo $sm; ?></li>
        				<li>color: <?php echo $navy; ?></li>
        				<li>font-weight: <?php echo $bold; ?></li>
        				<li>text-transform: uppercase</li>
        				<li class="heading">Active:</li>
        				<li>color: <?php echo $gold; ?></li>
        				<li>border-bottom: 4px solid <?php echo $gold; ?> (animated)</li>
        			</ul>
        		</tech>
        		
        		<div id="menu">
        		
        		    <nav class="navbar">
        		        <div class="navbar-header">
        		        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        		        	    <span class="sr-only">Toggle navigation</span>
        		        	    <span class="icon-bar"></span>
        		        	    <span class="icon-bar"></span>
        		        	    <span class="icon-bar"></span>
        		        	</button>
        		        </div>
        		        <div class="collapse navbar-collapse">
        		        	<ul class="nav navbar-nav">
        		        		<li>
        		        			<a href="#">Top</a>
        		        		</li>
        		        		<li>
        		        			<a href="#">Level</a>
        		        		</li>
        		        		<li>
        		        			<a href="#">Navigation</a>
        		        		</li>
        		        	</ul>
        		        </div>
        		    </nav>
        		    
        		</div>
        		
        		<div class="margin">
        		
        			<code>
        				&lt;div id="menu"&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;nav class="navbar"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="navbar-header"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="icon-bar"&gt;&lt;/span&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="icon-bar"&gt;&lt;/span&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="icon-bar"&gt;&lt;/span&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/button&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="collapse navbar-collapse"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul class="nav navbar-nav"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="#"&gt;Link Title&lt;/a&gt;&lt;/li&gt;
        			</code>
        		
        		</div>
        		
        		<div class="spacer"></div>
        		
        		<tech>
        			<ul>
        				<li>font-family: <?php echo $defaultFont; ?></li>
        				<li>font-size: <?php echo $sm; ?></li>
        				<li>color: <?php echo $navy; ?></li>
        				<li>font-weight: <?php echo $bold; ?></li>
        				<li class="heading">Active:</li>
        				<li>color: <?php echo $gold; ?></li>
        			</ul>
        		</tech>
        		
        		<div id="utilityMenu">
        		
        		    <ul>
        		    	<li>
        		    		<a href="#">Utility Menu</a>
        		    	</li>
        		    </ul>
        		    
        		</div>
        		
        		<div>
        		
        			<code>
        				&lt;div id="utilityMenu"&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="#"&gt;Link Title&lt;/a&gt;&lt;/li&gt;
        			</code>
        		
        		</div>
        		
        		<div class="spacer"></div>
        		
        		<tech>
        			<ul>
        				<li>font-family: <?php echo $defaultFont; ?></li>
        				<li>font-size: <?php echo $sm; ?></li>
        				<li>color: <?php echo $gold; ?></li>
        				<li>font-weight: <?php echo $bold; ?></li>
        				<li>text-transform: uppercase</li>
        				<li class="heading">Active:</li>
        				<li>color: <?php echo $foggyBlue; ?></li>
        				<li>border-bottom: 4px solid <?php echo $gold; ?> (animated)</li>
        			</ul>
        		</tech>
        		
        		<div class="marquee--navy">
        		
            		<div id="footerMenu" class="xl-padding--left">
            		
            		    <ul>
            		    	<li>
            		    		<a href="#">Footer</a>
            		    	</li>
            		    	<li>
            		    		<a href="#">Navigation</a>
            		    	</li>
            		    </ul>
            		    
            		</div>
        		
        		</div>
        		
        		<div>
        		
        			<code>
        				&lt;div id="footerMenu"&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="#"&gt;Link Title&lt;/a&gt;&lt;/li&gt;
        			</code>
        		
        		</div>
        		
        	</div>
        	
        	<div role="tabpanel" class="tab-pane" id="forms">
        		
        		<tech>
        			<ul>
        				<li class="heading">Label/Placeholder:</li>
        				<li>font-size: <?php echo $sm; ?> (on active, <?php echo $xs; ?>)</li>
        				<li>color: <?php echo $white; ?></li>
        				<li class="heading">Input:</li>
        				<li>font-size: <?php echo $default; ?></li>
        				<li>color: <?php echo $mistyWhite; ?></li>
        				<li>border-color: <?php echo $mistyWhite; ?></li>
        				<li class="heading">Input (focus):</li>
        				<li>border-color: <?php echo $gold; ?></li>
        			</ul>
        		</tech>
        		
        		<div class="marquee--navy">
        		
        		    <div class="col-md-8 col-lg-6 no-padding--horizontal">
            		    <form class="form">
            		    	
            		    	<div class="form-group">
            		    		<div class="errorMessage">Please fill out field</div>
            		    		<label>Placeholder Text</label>
            		    		<input class="form-control checkValue" type="text">
            		    	</div>
            		    	
            		    </form>
        		    </div>
        		    <div class="clearfix"></div>
        		
        		</div>
        		
        		<div>
        			
        			<code>
        				&lt;div class="form-group"&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="errorMessage"&gtError Message&lt;/div&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&gtPlaceholder Text&lt;/label&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class="form-control checkValue" type="text"&gt;
        			</code>
        			
        		</div>
        		
        		<div class="spacer"></div>
        		
        		<tech>
        			<ul>
        				<li class="heading">Error Message:</li>
        				<li>font-size: <?php echo $xs; ?></li>
        				<li>color: <?php echo $gold; ?></li>
        				<li>text-transform: lowercase</li>
        				<li class="heading">Input:</li>
        				<li>border-color: <?php echo $gold; ?></li>
        			</ul>
        		</tech>
        		
        		<div class="marquee--navy">
        		
        		    <div class="col-md-8 col-lg-6 no-padding--horizontal">
        			    <form class="form">
        			    	
        			    	<div class="form-group error">
        			    		<div class="errorMessage">Please fill out field</div>
        			    		<label>Placeholder Text</label>
        			    		<input class="form-control checkValue" type="text">
        			    	</div>
        			    	
        			    </form>
        		    </div>
        		    <div class="clearfix"></div>
        		
        		</div>
        		
        		<div>
        			
        			<code>
        				&lt;div class="form-group error"&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="errorMessage"&gtError Message&lt;/div&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&gtPlaceholder Text&lt;/label&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class="form-control checkValue" type="text"&gt;
        			</code>
        			
        		</div>
        		
        		<div class="spacer"></div>
        		
        		<tech>
        			<ul>
        				<li>font-family: <?php echo $defaultFont; ?></li>
        				<li>font-size: <?php echo $sm; ?></li>
        				<li>color: <?php echo $white; ?></li>
        				<li>font-weight: <?php echo $bold; ?></li>
        				<li>border: 4px solid <?php echo $gold; ?> (animated)</li>
        			</ul>
        		</tech>
        		
        		<div class="marquee--navy">
        		
        		    <div class="col-md-8 col-lg-6 no-padding--horizontal">
        			    <form class="form">
        			    	
        			    	<button type="submit" class="link--bars--white">
        			    		<span>Submit</span>
        			    	</button>
        			    	
        			    </form>
        		    </div>
        		    <div class="clearfix"></div>
        		
        		</div>
        		
        		<div>
        		
        			<code>
        				&lt;button type="submit" class="link--bars--white"&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;
        			</code>
        		
        		</div>
        		
        	</div>
        	
        	<div role="tabpanel" class="tab-pane" id="miscellaneous">
        		
        		<div id="logo">
        			<a href="#">
        			    <img src="images/pra-logo-header-no-border.png">
        			</a>
        		</div>
        		
        		<div>
        		
        			<code>
        				&lt;div id="logo"&gt<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="#"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="images/pra-logo-header-no-border.png"&gt;
        			</code>
        		
        		</div>
        		
        	</div>
        
        </div>
    
    </div>
    
    <!-- Tabs -->
    <script>
        $('#myTabs a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })
    </script>
    
    <!-- Floating Labels -->
    <script>
    	$(document).ready(function( $ ) {
    		$(function () {
    		  var showClass = 'show';
    		  // On focus show the label.
    		  $('.checkValue').focus( function () {
    		  	// Select label preceding the input.
    		    var label = $(this).prev('label');
    	      	label.addClass(showClass);
    		  });
    		  // On focusout, check if the input it empty. If it is, hide the label.
    		  $('.checkValue').on('checkval', function () {
    		    var label = $(this).prev('label');
    		    if(this.value === '') {
    		      label.removeClass(showClass);
    		    }
    		  }).focusout( function () {
    		    $(this).trigger('checkval');
    		  });
    		});
    	});
    </script>
    
</body>
</html>