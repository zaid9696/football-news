
const allInfo = ((item,i) => `
<a href="${item.link}" class="search__link">
        <div class="search_pic">
        <img class="${item.type == 'post' ? 'post' : ''}" src="${item.image}" alt="image-${i}">
        </div>
        <div class="search__header"><h3 class="header-${item.type}">${item.title}</h3></div>
    </a>

`);



export const searchView  = (data) =>{


    const searchContainer  = document.querySelector('#navSearch');
    // const searchDrop  = document.querySelector('.search__dropdown');
    
    

    const searchOutput = `

    <div class="search__dropdown"  data-simplebar>
                
        ${data.map((items ,i) => allInfo(items,i)).join('')}
    </div>
    
    `;

    searchContainer.insertAdjacentHTML('beforeend', searchOutput);


}











