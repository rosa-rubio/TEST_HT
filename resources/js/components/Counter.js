import axios from "axios";
import React, { useState } from "react";
import ReactDOM from 'react-dom';

export default function Counter() {

  const [count, setCount] = useState(0);

  const handleIncrement = () => {
    setCount(prevCount => prevCount + 1);
    notifyServer();
  };

  const handleDecrement = () => {
    setCount(prevCount => prevCount - 1);
    notifyServer();
  };

  const notifyServer = () => {
      axios.post('/count', {
          message: 'Counter Updated!',
      })
  }

  return (
    <div>
        <button onClick={handleDecrement}>-</button>
        <span> {count} </span>
        <button onClick={handleIncrement}>+</button>
    </div>
  );
}

if (document.getElementById('counter')) {
    ReactDOM.render(<Counter />, document.getElementById('counter'));
}
