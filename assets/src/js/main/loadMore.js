/**
 * Load more posts on click
 */

let sst_loadmore_button = document.querySelector('.sst_loadmore_button')

if(sst_loadmore_button){

    sst_loadmore_button.addEventListener('click', async ()=>{

        const data = {
            action: 'sst_loadmore',
            postType: sst_loadmore_button.dataset.postType,
            postsCount: sst_loadmore_button.dataset.postsCount,
            postsLoaded: sst_loadmore_button.dataset.postsLoaded,
            postsPerLoad: sst_loadmore_button.dataset.postsPerLoad,
            postsOrder: sst_loadmore_button.dataset.postsOrder
        };

        // Return if theres no more posts
        if(Number(data.postsLoaded)>=Number(data.postsCount)) return console.log('No more posts')

        fetch(sst_params.ajaxurl, {
            method: 'POST',
            credentials: 'same-origin',
            body: new URLSearchParams(data)
        }).then((response) =>  response.json())
        .then(({data: {postsLoaded, domObject}}) => {

            // Update posts loaded count
            sst_loadmore_button.dataset.postsLoaded = postsLoaded
            
            // Append posts
            sst_loadmore_button.closest('.sst_posts_grid').querySelector('.loadmoretarget').insertAdjacentHTML('beforeend', domObject);
            
            // Remove button if theres no more posts
            if(Number(postsLoaded)>=Number(data.postsCount)) {
                sst_loadmore_button.parentElement.removeChild(sst_loadmore_button)  
            }

            return;
        })
        .catch((error) => {
            console.log('Ajax error');
            console.error(error);
        });
    })
 
}