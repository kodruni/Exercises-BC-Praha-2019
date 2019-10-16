import React from 'react';
import './index.scss';

export default class Contact extends React.Component {
  render() {
    return (
      <div className="contact">
        <div className="contact__name">
          { this.props.firstName } {this.props.lastName}
        </div>
        <div className="contact__email">{this.props.email}</div>
      </div>
    );
  }
}

export default class Term extends React.Component {
  render() {
    return (
      <div className="term">
        <div className = "definition">
          { this.props.termName }
        </div>
      </div>
    );
  }
}
