export const BASE_URL: string = 'http://127.0.0.1:8000';

export const PostService = () => ({
    all: async () => {
        const {data} = useFetch(`${BASE_URL}/posts`);
        return data;
    },
    find: async (id: string) => {
        const {data} = useFetch(`${BASE_URL}/posts/${id}`);
        return data;
    },

})