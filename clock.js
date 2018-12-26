/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    ShowTime();
});
function ShowTime() {
    var dt = new Date();
    document.getElementById("lblTime").innerHTML = dt.toLocaleTimeString();
    window.setTimeout("ShowTime()", 1000); // Here 1000(milliseconds) means one 1 Sec  
}



