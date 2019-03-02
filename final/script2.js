var id1;//for empty
var id2;//for error
var regex;
var degreeFlag;
var idList=["fname","ffname","nationality","email","mobnum","gender","dob","hobbie[]","b1name",
"s1name","place1","percent1","year1","b2name","s2name","place2","percent2","year2","degree",
"regnum","roll","cgpa","flatno1","city1","country1","userid","pass","cpass"];

function calcAge()
{
      var date = new Date(document.getElementById("dob").value);
      var today = new Date();
      
      var timeDiff = Math.abs(today.getTime() - date.getTime());
      var age1 = Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365;

      age1=parseInt(age1);
      if(isNaN(age1))
      {
              document.getElementById("empty_age").style.display = 'block';
              document.getElementById("error_age").style.display = 'none';

              return 0;

      }
      else if(age1==0 || (date.getTime()>today.getTime()))
            {

              document.getElementById("empty_age").style.display = 'none';

              // document.getElementById("age").style.display = 'none';
              document.getElementById("error_age").style.display = 'block';
              document.getElementById("age").innerHTML = "";

              return 0;
               
            }
      else{
              document.getElementById("error_age").style.display = 'none';
              document.getElementById("empty_age").style.display = 'none';

              document.getElementById("age").innerHTML = age1;
              return 1;
          } 

}


function validatetext(curr_id) {
      var data=document.forms["myForm"][curr_id].value;
    
    if(data=="")
    {
      document.getElementById(id2).style.display = 'none';
      document.getElementById(id1).style.display = 'block';
      // alert("Error")
      return 0;
    }
    else if(!regex.test(data))
    {
      document.getElementById(id1).style.display = 'none';
      document.getElementById(id2).style.display = 'block';
      return 0;
    }
    else
    {
      document.getElementById(id1).style.display = 'none';
      document.getElementById(id2).style.display = 'none';
      return 1;
    }
  }

  

  function validate(i,curr_id){
    if (i==1) 
    {
      id1="fname_empty";
      id2="fname_error";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if (i==2) 
    {
      id1="ffname_empty";
      id2="ffname_error";
      regex=/^[a-zA-Z]+$/;
      return validatetext(curr_id);
    }
    if (i==3) 
    {
      id1="nationality_empty";
      id2="nationality_error";
      regex=/^[a-zA-Z]+$/;
      return validatetext(curr_id);

    }
   
    if(i==4)
    {
      id1="email_empty";
      id2="email_error";
      regex=/^[A-Za-z]((\.)?[0-9A-Za-z]+)*@[A-Za-z]((\.)?[0-9A-Za-z]+)*(\.)[A-Za-z]{2,3}$/
      return validatetext(curr_id);
    }

    if(i==5)
    {
      id1="phno_empty";
      id2="phno_error";
      regex=/^[1-9][0-9]{9}$/; 
      return validatetext(curr_id);
    }
    if(i==6)
    {
      return validateCRBox("gender");
    }
    if(i==7)
    {
      return calcAge();
    }
    if(i==8)
    {
      return true;
      // return validateCRBox("hobbie");

    }
    if (i==9) 
    {
      id1="empty_b1name";
      id2="error_b1name";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if (i==10) 
    {
      id1="empty_s1name";
      id2="error_s1name";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if (i==11) 
    {
      id1="empty_place1";
      id2="error_place1";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if (i==12) 
    {
      id1="empty_percent1";
      id2="error_percent1";
      regex= /^(100\.0000|[1-9]?\d\.\d{2})$/;

      return validatetext(curr_id);
    }
    if (i==13) 
    {
      id1="empty_year1";
      id2="error_year1";
      regex=/^[1-9][0-9]{3}$/; 

      return validatetext(curr_id);
    }
    if (i==14) 
    {
      id1="empty_b2name";
      id2="error_b2name";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if (i==15) 
    {
      id1="empty_s2name";
      id2="error_s2name";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if (i==16) 
    {
      id1="empty_place2";
      id2="error_place2";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if (i==17) 
    {
      id1="empty_percent2";
      id2="error_percent2";
      regex= /^(100\.0000|[1-9]?\d\.\d{2})$/;

      return validatetext(curr_id);
    }
    if (i==18) 
    {
      id1="empty_year2";
      id2="error_year2";
      regex=/^[1-9][0-9]{3}$/; 

      return validatetext(curr_id);
    }
    if(i==19)
    {
      if(degreeFlag==1)
      {
        var semv1=document.getElementById("semb").value;

        var dc1=document.getElementById("deptv").value
        if(dc1=="S" || semv1=="S")
        {
            var bFlag= rolld("deptv");
            var sFlag=validsem("semb");
            var bsFlag=(bFlag && sFlag);
            return bsFlag;            
        }
        else
        {
            return 1;
        }
      }


        if(degreeFlag==2)
        {
        var semv2=document.getElementById("semm").value;

        var dc2=document.getElementById("deptv").value
        if(dc2=="S" || semv2=="S")
        {
            var bFlag= rolld("deptv");
            var sFlag=validsem("semm");
            var bsFlag=(bFlag && sFlag);
            return bsFlag;            
        }
        else
        {
            return 1;
        }
      }
      if(degreeFlag==3)
        {
        var semv3=document.getElementById("semca").value;

        //var dc2=document.getElementById("deptv").value
        if( semv3=="S")
        {
            //var bFlag= rolld("deptv");
            var sFlag=validsem("semca");
           // var bsFlag=(bFlag && sFlag);
            return sFlag;            
        }
        else
        {
            return 1;
        }
      }
      // var degv=document.getElementsByName("degree").value; 
      // alert(degv);    
      else
        {return displaydegree(0,"degree");}
    }
    if(i==20)
    {
      
      return validateRegNo(curr_id);
    }
    if(i==21)
    {
      id1="roll_empty";
      id2="roll_error";
      // regex=/^[2][0][0-9][0-9][0][0-9]{}$/;
      regex=/^[0-9]{2}$/; 

      return validatetext(curr_id);
    }
    if(i==22)
    {
      id1="cgpa_empty";
      id2="cgpa_error";
      // regex=/^[2][0][0-9][0-9][0][0-9]{}$/;
      regex=/^[0]|[0-9]\.(\d?\d?)|[10].[0]$/; 

      return validatetext(curr_id);
    }
    if(i==23)
    {
      id1="flatno_empty";
      id2="flatno_error";
      regex=/^[a-zA-Z0-9\s,'-]*$/; 

      return validatetext(curr_id);
    }
    if(i==24)
    {
      id1="city_empty";
      id2="city_error";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if(i==25)
   { 
      id1="country_empty";
      id2="country_error";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if(i==26)
   { 
      id1="userid_empty";
      id2="userid_error";
      regex=/^[a-zA-Z]+$/;

      return validatetext(curr_id);
    }
    if(i==27)
    {
      regex=/^[a-zA-Z0-9\s,'-]*$/; 
      id1="pass_empty";
      id2="pass_error";
      return validatetext(curr_id);

    }
    if(i==28)
    {
      id1="cpass_empty";
      id2="cpass_error";
      var cpass=document.getElementById(curr_id).value;
      var pass=document.getElementById("pass").value;
      if(cpass!=pass)
      {
        document.getElementById("cpass_error").style.display="block";
        document.getElementById("cpass_empty").style.display="none";
        return 0;
      }
      else if(cpass=="")
      {
        document.getElementById("cpass_error").style.display="none";
        document.getElementById("cpass_empty").style.display="block";
        return 0;
      }
      else
      {
        document.getElementById("cpass_error").style.display="none";
        document.getElementById("cpass_empty").style.display="none";

        return 1;
      }

    }
 
    // if(i==29)
    // {alert("hehr");
    //   var q=document.getElementById("question").value;
    //   var a=document.getElementById("ans").value;
    //   alert(q);
    //   alert(a);
    //   if(q=0 && a=="")
    //   {
    //     alert("hehr");
    //     document.getElementById("q_empty").style.display="block";
    //     document.getElementById("a_empty").style.display="block";
    //     return 0;
    //   }
    //   if(q>0 && a!="")
    //   {
    //             alert("hehr");

    //     document.getElementById("q_empty").style.display="none";
    //     document.getElementById("a_empty").style.display="none";
    //     return 1;
    //   }
      
    //   else if(q>0 && a=="")
    //   {
    //     document.getElementById("q_empty").style.display="none";
    //     document.getElementById("a_empty").style.display="block";
    //     return 0;
    //   }

    // }
    




  }


function validateCRBox(name)
{
  var r = document.getElementsByName(name);
  var c = -1;

  for(var i=0; i < r.length; i++){
    // alert(r[i]);
    if(r[i].checked) 
    {
        c = i; 
    }
  }

  
  if (c == -1) 
  {
        document.getElementById(name).style.display = 'block';
        return 0;

  }
  
  else
  {        
        document.getElementById(name).style.display = 'none';
        return 1;

  }
 }
 function display(hideId)
 {
            document.getElementById(hideId).style.display = 'none';
            // return 0;

 }

 function displaydegree(value,name)
 {
  var val = document.getElementsByName(name);
  var c2 = -1;

  for(var k=0; k < val.length; k++){
    if(val[k].checked) 
    {
        c2 = k; 
    }
  }

  
  if (c2 == -1) 
  {
        document.getElementById(name).style.display = 'block';
        return 0;

  }
  
  else if(value=="Btech")
  {    
        degreeFlag=1;    
        document.getElementById(name).style.display = 'none';
        document.getElementById("dept").style.display = 'block';
        document.getElementById("depts").style.display = 'block';
        document.getElementById("sem").style.display = 'block';
        document.getElementById("bsems").style.display = 'block';
        document.getElementById("msems").style.display = 'none';
        document.getElementById("casems").style.display = 'none';

        document.getElementById("dept-code").innerHTML="";

        return 0;

  }
  else if(value=="Mtech")
    {        
        degreeFlag=2;
        document.getElementById(name).style.display = 'none';
        document.getElementById("dept").style.display = 'block';
        document.getElementById("depts").style.display = 'block';
        document.getElementById("sem").style.display = 'block';
        document.getElementById("msems").style.display = 'block';
        document.getElementById("bsems").style.display = 'none';
        document.getElementById("casems").style.display = 'none';

        document.getElementById("dept-code").innerHTML="";

        return 0;

  }
  else
  {
        degreeFlag=3;
        document.getElementById(name).style.display = 'none';
        document.getElementById("dept").style.display = 'none';
        document.getElementById("depts").style.display = 'none';
        document.getElementById("sem").style.display = 'block';
        document.getElementById("msems").style.display = 'none';
        document.getElementById("bsems").style.display = 'none';
        document.getElementById("casems").style.display = 'block';
        document.getElementById("dept-code").innerHTML="MCA";

        return 0;

  }

 }
 function rolld(curid1)
 {
    // roll_dept=1
    var dc=document.getElementById(curid1).value;
    if(dc== "S")
    {
        document.getElementById("depte").style.display = 'block';
        return 0;

    }
    else
    {
      document.getElementById("dept-code").innerHTML=dc;
      document.getElementById("depte").style.display = 'none';
      return 1;
    }
 }
function validateRegNo(curid2)
{
   var regno=document.getElementById(curid2).value
   regex=/^[2][0][0-9]{2}[0][0-9]{2}[1-9]$/; 
   if(regno=="")
   {
      document.getElementById("reg_error").style.display = 'none';
      document.getElementById("reg_empty").style.display = 'block';
      return 0;

   }
  if(!regex.test(regno))
  {
      document.getElementById("reg_error").style.display = 'block';
      document.getElementById("reg_empty").style.display = 'none';
      return 0;
  }
  else
  {
      regno=regno/10000;
      regno=regno%100;
      regno=parseInt(regno);
      document.getElementById("regn").innerHTML=regno;
      document.getElementById("reg_error").style.display = 'none';
      document.getElementById("reg_empty").style.display = 'none';
      return 1;

  }
}
 function validsem(curid)
 {
    var semv=document.getElementById(curid).value;
    if(semv=="S")
    {
        document.getElementById("seme").style.display = 'block';
        return 0;

    }
    else
    {
      document.getElementById("seme").style.display = 'none';
        return 1;
    }

 }

 function addr(vala)
 {
  if(vala==1)
  {
    document.getElementById("flatno2").value=document.getElementById("flatno1").value;
    document.getElementById("street2").value=document.getElementById("street1").value;
    document.getElementById("city2").value=document.getElementById("city1").value;
    document.getElementById("state2").value=document.getElementById("state1").value;
    document.getElementById("pincode2").value=document.getElementById("pincode1").value;
    document.getElementById("country2").value=document.getElementById("country1").value;

    return 1;
  
  }
}
  function validateForm()
  {
    var flag=0;
    var ret=0;
    var idListn=idList.length;
    // alert(idList.length);
   for(var a=0; a<idList.length; a++)
    {
      var newId=idList[a];
      ret= validate(a+1,newId);
      flag=flag+ret;
    }
    
    if(flag<(idList.length))
    {
      return false;
    }
    else
    {
      return true;
    }
  }


