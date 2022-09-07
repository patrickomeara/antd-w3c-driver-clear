import React from "react";
import { createRoot } from "react-dom/client";
import {Button, DatePicker, Input, Space, version} from 'antd';
import "antd/dist/antd.css";

const App = () => {
  const [value, setValue] = React.useState('existing value');
  const [antValue, setAntValue] = React.useState('existing value');
  return (
      <div className="App">
        <h1>antd version: {version}</h1>
        <Space direction="vertical">
          <input name="input" value={value} onChange={(e) => setValue(e.target.value)} style={{width: 400}} />
          <Input name="ant-input" value={antValue} onChange={(e) => setAntValue(e.target.value)} style={{width: 400}} />
        </Space>
      </div>
  );
};

const root = createRoot(document.getElementById("root"));
root.render(<App />);
