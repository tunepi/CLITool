import React from 'react';

const gitType: any = {
    '0': 'Setup and Config',
    '1': 'Getting and Creating Projects',
    '2': 'Basic Snapshotting',
    '3': 'Branching and Merging',
    '4': 'Sharing and Updating Projects',
    '5': 'Inspection and Comparison',
    '6': 'Patching',
    '7': 'Debugging',
    '8': 'Guides',
    '9': 'Email',
    '10': 'External Systems',
    '11': 'Administration',
    '12': 'Server Admin',
    '13': 'Plumbing Commands',
};

const GitTypeName = (git_type: string) => {
    return <div>{gitType[git_type]}</div>;
};

export default GitTypeName;
