import React from 'react';

interface Props {
    value: string;
    index: number;
}

const Option = ({ value, index }: Props) => {
    return (
        <option value={index} key={index}>
            {value}
        </option>
    );
};

export default Option;
