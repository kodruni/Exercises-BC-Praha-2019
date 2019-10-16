import React from 'react';
import ReactDOM from 'react-dom';

import Question from './question/question.jsx';
import Answer from './answer/answer.jsx';


class App extends React.Component {
  render() {
    return (
      <>
      <Question
      
      />
      
      {/* <Answer 
        user="baked_turtle" 
        text="your question is stupid" 
      /> */}
      </>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('app'));
