import React from 'react';

export default class Celebrity extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        
        return (
            <div className="celebrity">
                <img src={this.props.photo} alt={this.props.name}/>
    <div class="text">
        <h2>{this.props.name}</h2>
        <div class="earnings">
            <h3>Earnings:</h3>{this.props.earnings}
        </div>
        <div class="age">
            <h3>Age:</h3>{this.props.age}
        </div>
        <div class="citizenship">
            <h3>Citizenship:</h3>{this.props.citizenship}
        </div>
        <div class="events">
            <ul>
            {
                this.props.events.map((event, i) => (
                <li key={ i }>{ event }</li>
                ))
            }
            </ul>
        </div>
    </div>
            </div>
        );
    }
}