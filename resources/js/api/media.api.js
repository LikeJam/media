import axios from "axios";

export const mediaApi = {
    all: () => axios.get('api/media'),
    upload: (file) => axios.post('api/media/upload', file),
}
