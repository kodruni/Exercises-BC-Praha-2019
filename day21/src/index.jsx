import React from 'react';
import ReactDOM from 'react-dom';

import Contact from './contact/contact.jsx';
import './index.scss';
import './index.html';

class App extends React.Component {
  render() {
    return (
      <Contact 
        firstName="hello" 
        lastName="world"
        // email="homer@springmail.com" //
      />
    );
  }

  render () {
    return (
      <Term 
        termName = "Maelstrom"
      />
    );
  }
}

// class Term extends React.Component {
  // render () {
    // return (
      // <Term 
        // termName = "Maelstrom"
      // />
    // );
  // }
// }



ReactDOM.render(<App />, document.getElementById('app'));
