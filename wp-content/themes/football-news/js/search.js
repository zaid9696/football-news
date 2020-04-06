export default async function search(input){


    try{

        const result = await fetch(`${footballData.root_url}/wp-json/footballnews/v1/search?term=${input}`);

        const data = await result.json();

        
        return data

    }

    catch(err){

        console.log(err)
    }


}