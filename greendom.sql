BEGIN;

CREATE TABLE recycle (
  itemNAME VARCHAR(500) NOT NULL,
  itemSTATUS VARCHAR(500) NOT NULL
);

INSERT INTO recycle (itemNAME, itemSTATUS) VALUES
('Plastic Water Bottle', 'Recycling'),
('Paper Bag', 'Recycling'),
('Food', 'Compost'),
('Paper Plate', 'Compost'),
('Candy Wrapper', 'Garbage'),
('Cardboard', 'Recycling'),
('Aluminum Can', 'Recycling'),
('Paper', 'Recycling'),
('Wooden Branch', 'Compost'),
('Flowers', 'Compost'),
('Candle', 'Garbage'),
('Yogurt Cups', 'Recycling'),
('Glass', 'Recycling'),
('Plants', 'Compost'),
('Egg Carton', 'Recyclable'),
('Wood', 'Compost');

COMMIT;
