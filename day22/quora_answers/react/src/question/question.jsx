import React from 'react';
// import './style.scss';

export default class Question extends React.Component {
  render () {
    return (
      <div className="questions">
        <div className="title">
          { this.props.title }
        </div>
        <div className="text">{this.props.text}</div>
      </div>
    );
  }
}