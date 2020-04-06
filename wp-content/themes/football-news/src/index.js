
  import _ from 'lodash';
  import 'simplebar'; // or "import SimpleBar from 'simplebar';" if you want to use itmanually.
  import 'simplebar/dist/simplebar.css';
  import 'owl.carousel';
  import nav from '../js/nav';
  import search from '../js/search';
  import {searchView} from '../js/searchResults';


  // Selecting Elements

  const searchContainer  = document.querySelector('#navSearch');
  const searchInput = document.querySelector('.nav__search-input');
  const load = document.querySelector('.loading');

  
  let isNotPrev;

  //  Printing search results;
  const searchResult = async (e) =>{

    e.preventDefault();


     var dropElement = e.target.nextElementSibling.nextElementSibling;

     if(dropElement){
       dropElement.innerHTML = '';
     }
    
    try{

      let searchValue = searchInput.value;

      if(searchValue == isNotPrev ) return;
      if(searchValue == ''){

        if(dropElement){
          dropElement.parentNode.removeChild(dropElement);
        }
        return;
      }
      
      isNotPrev = searchValue;
      load.style.display = 'inline';
      await search(searchValue).then(data =>{
        if(data.length != 0){

          if(dropElement){
            dropElement.parentNode.removeChild(dropElement);
          }

          load.style.display = 'none';
          searchView(data);
          
        }else{
          
          load.style.display = 'none';
            dropElement.innerHTML = '';
            dropElement.innerHTML = '<p class="noResult">No Result Match, Sorry</p>';
            
        }
      })


    }
    catch(err){
     
      console.log(err)
    }

  }
// Listening input keyups
searchInput.addEventListener('keyup', searchResult);
// Removing search dropdown
searchContainer.addEventListener('click', (e) =>{

  const dropElement = e.target.children[3];


  
  if(dropElement){
    dropElement.parentNode.removeChild(dropElement);

     }

})













  