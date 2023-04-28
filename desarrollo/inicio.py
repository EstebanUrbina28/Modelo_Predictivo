import pickle
from sklearn.tree import DecisionTreeClassifier
from sklearn.tree import export_graphviz
from graphviz import Source

# Cargar el modelo entrenado desde un archivo
with open('cal_tree.php', 'rb') as f:
    model = pickle.load(f)

# Convertir el modelo a un objeto de árbol de decisión de Scikit-learn
tree = DecisionTreeClassifier()
tree.__dict__ = model.__dict__

# Generar el gráfico del árbol de decisión en formato DOT
dot_data = export_graphviz(tree, out_file=None, 
                           feature_names=['1', '2', '3', '4', '5', '6','7','8','9'])

# Convertir el gráfico del árbol de decisión de formato DOT a formato HTML
graph = Source(dot_data, format='html')
graph.render('tree_graph')
