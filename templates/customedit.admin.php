<?php
if ($display_it == TRUE) {
   print "<br><center>\n";
   print "<FORM action=\"admin.php\" method=POST> \n";
   print "<input type=\"hidden\" name=\"action\"     value=\"custom_edit_do\"> \n";
   print "<input type=\"hidden\" name=\"sub_ID\"     value=\"$Subscriber_ID\">\n";
   print "<input type=\"hidden\" name=\"r_ID\"       value=\"$Responder_ID\"> \n";
   print "<input type=\"hidden\" name=\"email_addy\" value=\"$Search_EmailAddress\">\n";
   print "<table width=\"365\" border=\"0\" cellspacing=\"6\" cellpadding=\"0\" style=\"border: 1px solid #000000;\"> \n";
   print "<tr> \n";
   print "  <td colspan=\"2\" bgcolor=\"#0000CC\"> \n";
   print "      <font color=\"#FFFFFF face=\"Tahoma, Arial, Helvetica, sans-serif\"> \n";
   print "         <strong>Edit custom fields:</strong> \n";
   print "      </font> \n";
   print "  </td> \n";
   print "</tr> \n";
   print "<tr> \n";
   print "  <td colspan=\"2\"> \n";
   print "    <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "        Street Address Line 1: \n";
   print "      </font> \n";
   print "    </strong> \n";
   print "    <br> \n";
   print "    <input maxlength=\"95\" size=\"45\" name=\"cf_streetaddress_1\" value=\"$DBarray[streetaddress_1]\"> \n";
   print "  </td> \n";
   print "</tr> \n";
   print "<tr> \n";
   print "  <td colspan=\"2\"> \n";
   print "    <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          Street Address Line 2: \n";
   print "      </font> \n";
   print "    </strong> \n";
   print "    <br> \n";
   print "    <input maxlength=\"95\" size=\"45\" name=\"cf_streetaddress_2\" value=\"$DBarray[streetaddress_2]\"> \n";
   print "  </td> \n";
   print "</tr> \n";
   print "<tr> \n";
   print "   <td colspan=\"2\"> \n";
   print "     <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          City: \n";
   print "      </font> \n";
   print "     </strong> \n";
   print "     <br> \n";
   print "     <input maxlength=\"95\" size=\"45\" name=\"cf_city\" value=\"$DBarray[city]\"> \n";
   print "   </td> \n";
   print "</tr> \n";
   print "<tr> \n";
   print "   <td> \n";
   print "     <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          State: \n";
   print "      </font> \n";
   print "     </strong> \n";
   print "     <br> \n";
   print "     <input maxlength=\"10\" size=\"5\" name=\"cf_state\" value=\"$DBarray[state]\"> \n";
   print "   </td> \n";
   print "   <td> \n";
   print "     <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          Zipcode: \n";
   print "      </font> \n";
   print "     </strong> \n";
   print "     <br> \n";
   print "     <input maxlength=\"30\" size=\"12\" name=\"cf_zipcode\" value=\"$DBarray[zipcode]\"> </font></td> \n";
   print "</tr> \n";
   print "<tr> \n";
   print "   <td colspan=\"2\"> \n";
   print "     <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          Home Phone: (ie: 999-555-1234): \n";
   print "      </font> \n";
   print "     </strong> \n";
   print "     <br> \n";
   print "     <input maxlength=\"15\" size=\"15\" name=\"cf_homephone\" value=\"$DBarray[homephone]\"> \n";
   print "   </td> \n";
   print "</tr> \n";

   print "<tr> \n";
   print "   <td colspan=\"2\"> \n";
   print "     <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          Reason: \n";
   print "      </font> \n";
   print "     </strong> \n";
   print "     <br> \n";
   print "     <input maxlength=\"99\" size=\"30\" name=\"cf_reason\" value=\"$DBarray[reason]\"> \n";
   print "   </td> \n";
   print "</tr> \n";
   print "<tr> \n";
   print "   <td colspan=\"2\"> \n";
   print "     <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          Income: \n";
   print "      </font> \n";
   print "     </strong> \n";
   print "     <br> \n";
   print "     <input maxlength=\"99\" size=\"30\" name=\"cf_income\" value=\"$DBarray[income]\"> \n";
   print "   </td> \n";
   print "</tr> \n";
   print "<tr> \n";
   print "   <td colspan=\"2\"> \n";
   print "     <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          Interest: \n";
   print "      </font> \n";
   print "     </strong> \n";
   print "     <br> \n";
   print "     <input maxlength=\"99\" size=\"30\" name=\"cf_interest\" value=\"$DBarray[interest]\"> \n";
   print "   </td> \n";
   print "</tr> \n";
   print "<tr> \n";
   print "   <td colspan=\"2\"> \n";
   print "     <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          Hours: \n";
   print "      </font> \n";
   print "     </strong> \n";
   print "     <br> \n";
   print "     <input maxlength=\"99\" size=\"30\" name=\"cf_hours\" value=\"$DBarray[hours]\"> \n";
   print "   </td> \n";
   print "</tr> \n";

   print "<tr> \n";
   print "   <td colspan=\"2\"> \n";
   print "     <strong> \n";
   print "      <font color=\"#003366\" face=\"arial\" size=\"2\"> \n";
   print "          Best Time To Contact You? \n";
   print "      </font> \n";
   print "     </strong> \n";
   print "     <br> \n";
   print "     <input maxlength=\"99\" size=\"45\" name=\"cf_best_contact_time\" value=\"$DBarray[best_contact_time]\"> \n";
   print "</tr> \n";
   print "<tr><td> \n";
   print "<font color=\"#003366\" face=\"Tahoma, Arial, Helvetica, sans-serif\" size=\"2\"> \n";
   print "  Additional offers: \n";
   print "</font> \n";
   if ($DBarray['other_offers'] == 1) { $checkedYN = "checked=\"checked\""; }
   print "<input $checkedYN type=\"checkbox\" name=\"cf_other_offers\" value=\"1\"> \n";
   print "<input id=\"submit\" type=\"submit\" value=\"Save\"> \n";
   print "</td></tr> \n";
   print "</table> \n";
   print "</form></center>\n";
   $display_it = FALSE;
}
?>