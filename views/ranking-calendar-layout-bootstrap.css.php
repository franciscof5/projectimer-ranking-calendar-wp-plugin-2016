<style>
.calendar-container {
	margin:0 auto !important;

}
.calendar-container h1 {
	font-family:Lobster;
	text-align: center;
}
.calendar-p {
	/*margin:-10px 0 5px 0;*/
	text-align:center;
}
.day-caption {
	font-family:Lobster;
}
ul.calendar li.day {
		overflow: hidden !important;
		border-radius: 5px;
	}
	ul.calendar li.empty {
		border-radius: 5px;
	}
	ul.weekdays li {
		border-radius: 5px  !important;
		text-align: center;
	}
	ul.calendar li.day .author-ranking {
		display: none;
		overflow-y:auto; 
		max-height: 80px;
		background: #FFF;
		/*border-bottom-left-radius: 5px;
		border-bottom-right-radius: 5px; */
	}

	ul.calendar li.day .author-ranking li {
		height: 15px;

	}
	ul.calendar li.day .day-footer li:hover {
		white-space: normal;
		height: inherit !important;
		
		/*background-color: #CAC5A7 !important;
		height: inherit !important;
		
		white-space: normal;
		
		display: block;*/
	}
	ul.calendar li.day .author-ranking span {
		overflow: hidden;
		white-space: nowrap;
		float:left;
	}
	ul.calendar li.day .author-ranking span.aut_pos {
		width: 10%;
	}
	ul.calendar li.day .author-ranking span.aut_nome {
		width: 30%;

	}
	ul.calendar li.day .author-ranking span.aut_barra {
		width: 40%;
		
	}
	ul.calendar li.day .author-ranking span.aut_total {
		width: 10%;
		float:right;
		padding-right: 5px;
	}

	
	ul.calendar li.day div.day-footer {
		overflow: hidden;
		height: 130px;
		width:100%;
	}
	ul.calendar li.day div.day-footer ul li {
		height: 6px;
		margin: 0;
	}
	ul.calendar li.day div.day-footer {
		border-top:1px dotted #333;
	}
	ul.calendar li.day div.day-footer:hover {
		overflow-y: auto !important;
	}

	ul.calendar li.day ul li {
		white-space: nowrap;
	}

	/*for a span above*/
	.show-hour {
		float: right;
		font-size: 10px;
	}
	/**/
	ul.weekdays li {
		font-family: Lobster;
		background-color: #777 !important;
		color: #FFF !important;
	}
<?php
// Padding used for container
$padding = 5;

// Actual box dimension calculated considering padding used for container
$actualBoxDimension = ($boxDimension - ($padding * 2));
?>

<!--
/* Style for calendar container */
ul.calendar, ul.weekdays {
    margin: 0px auto;
    padding: 0px;
    width: <?php echo (($boxDimension * 7) + 28); ?>px; /* Container's width will be box width multiplied by number of days (plus 28 considering margin and border widths for each box in week) in week */
}

/* Style for calendar day, empty and weekday data container */
ul.calendar li.day, ul.calendar li.empty, ul.weekdays li {
    border: 1px #999999 solid;
    float: left;
    font-weight: bold;
    list-style: none;
    margin: 1px;
    overflow: hidden;
    padding: <?php echo $padding; ?>px;
    width: <?php echo $actualBoxDimension; ?>px; /* Container's width will be same as box dimension */
}

/* Style for calendar day and empty data container */
ul.calendar li.day, ul.calendar li.empty {
    height: <?php echo $actualBoxDimension; ?>px; /* Container's height will be same as box dimension */
}

/* Style for calendar day data container */
ul.calendar li.day {
    /*background-color: <?php echo $dayBoxBackgroundColor; ?>;*/
	background-color:#CCC;
}

/* Style for calendar weekday data container */
ul.weekdays li {
    background-color: <?php echo $weekdayBackgroundColor; ?>;
}

/* Style for calendar day data container on hovering */
ul.calendar li.day:hover {
    overflow-y: auto;
}

/* Style for calendar weekday day appear in black */
ul.calendar li div.blackDay {
    color: #000000;
    padding-left: 1px;
    padding-top: 1px;
    position: absolute;
    z-index: 2;
}

/* Style for calendar weekday day appear in white */
ul.calendar li div.whiteDay {
    color: #FFFFFF;
    padding-left: 0px;
    padding-top: 0px;
    position: absolute;
    z-index: 3;
}

/* Style for calendar day posts data container */
ul.calendar li.day ul {
    clear: both;
    margin: 0px;
    padding: 0px;
}

/* Style for calendar day posts data container which has background image */
ul.calendar li.day ul.invisible {
    visibility: hidden;
}

/* Style for calendar day posts data container which has background image on hovering */
ul.calendar li.day:hover ul.invisible {
    visibility: visible;
}

/* Style for calendar day post data */
ul.calendar li.day ul li {
    border: none;
    float: none;
    font-size: 9px;
    font-weight: normal;
    list-style: none;
    margin-left: 0;
    padding: 5px;
}

/* Style for calendar day post data which has background image */
ul.calendar li.day ul.invisible li {
    filter: alpha(opacity=35);
    opacity: 0.35;
}

/* Style for calendar day post data on hovering */
ul.calendar li.day:hover ul li:hover, ul.calendar li.day ul.invisible li {
    background-color: #EEEEEE;
}

/* Style for calendar day post data which is semi-transparent on hovering */
ul.calendar li.day:hover ul.invisible li:hover {
    filter: alpha(opacity=75);
    opacity: 0.75;
}

/* Style for calendar day post data link on hovering */
ul.calendar li.day:hover ul li:hover a, ul.calendar li.day ul.invisible li a {
    color: #000000;
}

/* Style for calendar day post data link on hovering link */
ul.calendar li.day:hover ul li:hover a:hover {
    color: red;
}

/* Style for line break so that no floating elements allowed on left or right side */
.clear {
    clear: both;
}
//-->
</style>
