m=document.querySelector(".m");
form=document.querySelector("#studentform");
form.addEventListener("submit",submitform);
count=0;
function submitform(event){
    
    document.querySelector(".place").classList.remove("none");
    document.querySelector(".form").classList.add("none");
    
    event.preventDefault();
    
}


form=document.querySelector("#studentform")
black=document.querySelector("#black");
st=document.querySelector("#student");
pre=document.querySelector("#pre");
pree=document.querySelector("#pree");
st.addEventListener("click",function(){
    
    m.classList.add("none");
    document.querySelector("#loginstudentform").classList.remove("none");
});
document.querySelector("#signup").addEventListener("click",()=>{
    m.classList.add("none");
    
    document.querySelector(".form").classList.remove("none");
})

black.addEventListener("click",function(){
     

     
    m.classList.add("none");
    document.querySelector("#addminstratorform").classList.remove("none");
});

pre.addEventListener("click",()=>{
    document.querySelector("#addminstratorform").classList.add("none");
    m.classList.remove("none");
    
});
pree.addEventListener("click",()=>{
    document.querySelector("#addminstratorform").classList.add("none");
    m.classList.remove("none");
    document.querySelector(".form").classList.add("none");
    
});

document.querySelectorAll(".hoverme").forEach(Element=>{
Element.addEventListener("mouseover",(e)=>{
    j=e.target;
    z=j.parentNode;
    z.querySelector(".cardhover").style.display="flex";
})
})
document.querySelectorAll(".leave").forEach(Element=>{
    Element.addEventListener("click",(e)=>{
        j=e.target;
        z=j.parentNode;
        
        z.style.display="none";
    })
    });

    document.querySelectorAll(".selectp").forEach(element => {
        element.addEventListener("click",(e)=>{
            j=e.target;
            z=j.parentNode.parentNode.parentNode;
            
            z.querySelector(".gif").style.display="flex";
            z.querySelector(".gif").classList.add("suresh");
        })
        
    });

    document.querySelectorAll(".unselect").forEach(element => {
        element.addEventListener("click",(e)=>{
            j=e.target;
            z.querySelector(".gif").classList.remove("suresh");
            z=j.parentNode;
            z.style.display="none";
        })
        
    });

   selcor=[];

    
        


course=[
    ["dr.dinesh","dr.karthi"],
    ["dr.suresh","Ms.aathira","Dr.ramesh"],
    ["dr.sakthi","dr.Naveen","Dr.navin","ms.vedha"],
    ["Ms.Varshaa","Dr.Nathin"],
    ["Ms.Harisowndarya","Ms.abinaya"],
    ["Ms.poojashree","Dr.vignesh","Dr.sachin"],
    ["Dr.siddarthsriram"],
    ["Ms.varshaa","Ms.Kavya"],


]
bab=[];

zz=document.querySelector(".list2");


document.querySelector(".proceed").addEventListener("click",()=>{
    
    

    sem=document.querySelector(".sem").value;
    if(sem==3){
    document.querySelector(".sampleblock").innerHTML=`Open Elective subjects`;
    }
    else{
        document.querySelector(".sampleblock").innerHTML=`Open Elective subjects`;
        
    }
document.querySelector(".place").classList.remove("none");
document.querySelector(".m").classList.add("none");


});     





document.querySelector(".sbefore").addEventListener("click",()=>{
   
     document.querySelectorAll(".card").forEach((element,index) => {
        x=element.querySelector(".gif");
       if(x.classList=="gif suresh")
       {
        selcor.push((x.parentNode.querySelector(".cardheading").innerHTML));
        bab.push(index);
       }
        
     });
     alert(bab.length);
     if(bab.length==5)
     {
        document.querySelector(".place").classList.add("none")
    
        document.querySelector(".listforselection").classList.remove("none");
     l=document.querySelector(".listyy");
for( i=0;i<selcor.length;i++)
{
    
    
    bx=document.createElement("li");
    bx.innerHTML=selcor[i]+" ";
    p=document.createElement("select");
    
    for(t=0;t<course[bab[i]].length;t++)
    {
        f=document.createElement("option");
        f.innerHTML=course[bab[i]][t];
        p.appendChild(f);
    }
    bx.appendChild(p);
    l.appendChild(bx);


    
    
    
   
   
   
   



    
}
     }
     else{
        alert("Select exactly 5 subjects to proceed");
        bab=[];
     }
     
    });



    document.querySelector("#final").addEventListener("click",()=>{
        document.querySelector(".response").classList.remove("none");
        document.querySelector(".listforselection").classList.add("none");
    })

    
    
