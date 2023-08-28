import React, { useState, useEffect } from 'react'
import ReactDOM from 'react-dom';

const Main = () => {
     
    const [cards, setCards] = useState([]);    
    
    const getCards = () => {
        fetch('/api/cards/')
        .then(response => {
            return response.json();
        })
        .then(cards => {
            setCards(cards);
        });
    };
    
    useEffect(() => {
        getCards();
      }, []);    
    
    const renderCards = () => {
        return cards.map(card => {
            return (
                
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