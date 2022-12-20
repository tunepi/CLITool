export type Git = {
    id: string;
    git_name: string;
    git_type: string;
    description: string;
    created_at: string;
};

export type User = {
    id: string;
    name: string;
    email: string;
    roll: string;
    created_at: string;
};

export type GitOption = {
    id: string;
    git_id: string;
    git_option: string;
    description: string;
    created_at: string;
};
