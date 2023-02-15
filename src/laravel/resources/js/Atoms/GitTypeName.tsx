import { gitType } from '@/common';
import React from 'react';

const GitTypeName = (git_type: number) => {
    return <div>{gitType[git_type]}</div>;
};

export default GitTypeName;
