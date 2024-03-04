function validate()
{
	
var un,pw

un=document.getElementById("Uname").value;
pw=document.getElementById("Pass").value;

if(un.length==0 && pw.length==0)
{
	alert("Empty Username & Password");
	{
        window.location.reload();
    };
	
}
else if(pw.length==0)
{	
	alert("Empty Password");
	{
        window.location.reload();
    };

}
else if(un.length==0)
{	
	alert("Empty Username");
	{
        window.location.reload();
    };

}
else
{
    window.location.href = "./Activities.html";
}

}

function openNav() {
    document.getElementById("mySidenav").style.width = "225px";
}
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}