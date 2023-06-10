import mongoose from 'mongoose';
import express from 'express';
import bodyParser from 'body-parser';
import cors from 'cors';

import {
    MONGO_CONNECTION_URI,
    MONGO_DB_NAME,
    API_PORT,
    MONGO_DB_PORT,
} from './config';

mongoose
    .connect(`${MONGO_CONNECTION_URI}:${MONGO_DB_PORT}/${MONGO_DB_NAME}`, {
        useNewUrlParser: true,
        useUnifiedTopology: true,
    })
    .then(() => {
        console.log(`Connected to MongoDB on port ${MONGO_DB_PORT}`);

        const app = express();

        app.use(bodyParser.json());
        app.use(bodyParser.urlencoded({ extended: false }));

        app.use(cors({ origin: '*' }));

        // Define your API routes
        app.get('/api/example', (req, res) => {
            res.json({ message: 'Example API route' });
        });

        // Start the server
        app.listen(API_PORT, () => {
            console.log(`Blog API listening on port: ${API_PORT}`);
        });
    })
    .catch((error) => {
        console.error('Failed to connect to MongoDB:', error);
    });
