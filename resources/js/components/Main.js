import React, { useState, useEffect } from 'react'
import ReactDOM from 'react-dom';

const Main = () => {
    // Sets initial state for products to empty array 
    const [cards, setCards] = useState([]);    
    // Call this function to get products data 
    const getCards = () => {
        /* fetch API in action */
        fetch('/api/cards/')
        .then(response => {
            return response.json();
        })
        .then(cards => {
            //Fetched product is stored in the state 
            setCards(cards);
        });
    };
    /*useEffect is a lifecycle hook 
* that gets called after the component is rendered 
*/
    useEffect(() => {
        getCards();
      }, []);    
    // Render the products 
    const renderCards = () => {
        return cards.map(card => {
            return (
                /* When using list you need to specify a key 
* attribute that is unique for each list item 
*/
                <li key={card.id} >
                    { card.title } 
                </li> 
            );
        })
    };
    return(
        <div>
              <ul>
                { renderCards() }
              </ul> 
        </div> 
    )
}
export default Main

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}