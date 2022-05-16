//getting suggestions that we want to query throuth

//am using here temporary suggestions to create out my code
//but suggestions will be sourced out from the root/folder that has items/products/pics to be searched or queried through

let suggestions = [

    "Techno spark 3",
    "Techno cammon 16",
    "Samsung",
    "Iphone",
    "Huawei",
    "Tv set Samsung",
    "Heater",
    "gold watch",
    "Silvered watch",
    "Leather jacket"
];




// Getting all required elements
const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocome-box");
let emptyArray = [];

//if user presses any key & release

inputBox.onkeyup = (e) =>{
    let userData = e.target.value;  // user entered data
    //let emptyArray = [];

    if(userData){
        emptyArray = suggestions.filter((data)=>{     // a variable that carries all suggestions

            //filtering array value and user char to lower case and return only those words/sentence that starts with user entered word
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            


        });

        if(emptyArray=== undefined){

            let emptyArray = [];
        

        emptyArray = array.map(()=>{

            return dat = '<li>'+ data + '</li>';
            
        
        } );
    }

        console.log(emptyArray );
        searchWrapper.classList.add('active'); //show autocomplete box 
        showSuggestions(emptyArray);

        let allList = suggBox.querySelectorAll("li");
        for(let i = 0; i < allList.length; i++){
            //adding onclick attribute in all tags
            allList[i].setAttribute("onclick", "select(this)");

            

        }
    }
    else{

        searchWrapper.classList.remove('active');  // hide autocomplete box

    }

}

function select(element){

    let selectUserData = element.textContent;
    inputBox.value = selectUserData;  // passing the user selected list item data in text field
    
    searchWrapper.classList.remove('active');  // can be removed if you want more suggestions to choose on wen user enters a word or a text
    //it makes only one word/sentence to appear wen user eneters a word that marches



}

function showSuggestions(list){

    let listData;

    if(!list.length){
        userValue = inputBox.value;
        listData = '<li>' + userValue + '<br>' + '</li>';


    }
    else{
        listData = list.join('');

    }

    suggBox.innerHTML =listData + "<br>";

}


// viewing images/Items on webpage from the root folder

var imageInput = document.querySelector("#file");
var uploadedImage = "";
imageInput.addEventListener("change", function(){

    const reader = new FileReader();
    reader.addEventListener("submit", () =>{
        uploadedImage = reader.result;

        document.querySelector("#display-image").style.backgroundImage = `url(${uploadedImage})`;
    
    })
    reader.readAsDataURL(this.files[0]);
})













