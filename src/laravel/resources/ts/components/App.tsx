import React from 'react';
import ReactDOM from 'react-dom';

const App = () => {
    const title: string = "typescriptを使えるようにしたよ！";
    return <h1>{title}</h1>;
};

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}