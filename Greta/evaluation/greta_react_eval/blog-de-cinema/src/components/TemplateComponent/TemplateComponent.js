// src/components/TemplateComponent.js
import React from "react";
import { Button, Typography, Container } from "@mui/material";

const TemplateComponent = () => {
  return (
    <Container>
      <Typography variant="h4" component="h1" gutterBottom>
        Mon Composant Stylé
      </Typography>
      <Button variant="contained" color="primary">
        Cliquer Moi
      </Button>
    </Container>
  );
};

export default TemplateComponent;
