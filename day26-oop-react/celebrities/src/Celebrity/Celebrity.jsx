import React from 'react';
import { timingSafeEqual } from 'crypto';

export default className Celebrity extends React.Component {
    constructor(props) {
        super(props);
        
    }

    render() {

        
        return (
            <div className="celebrity">
                <img src={this.props.photo} alt={this.props.name}/>
                <div className="text">
                    <h2>Taylor Swift</h2>
                    <div className={this.props.earnings}>
                        <h3>Earnings:</h3>$185 M
                    </div>
                    <div className="age">
                        <h3>Age:</h3>29{this.props.age}
                    </div>
                    <div className="citizenship">
                        <h3>Citizenship:</h3>{this.props.citizenship}
                    </div>
                    <div className="events">
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
